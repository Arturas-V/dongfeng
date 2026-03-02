/**
 * Hero Slider
 * Infinite loop slider with drag support and dot navigation
 */
(() => {
  const slider = document.querySelector('[data-hero-slider]');
  if (!slider) return;

  const track = slider.querySelector('.hero__track');
  const slides = Array.from(slider.querySelectorAll('.hero__slide'));
  const dots = Array.from(slider.querySelectorAll('[data-hero-dot]'));
  const totalSlides = slides.length;

  if (!track || totalSlides === 0) return;

  // Clone first and last slides for infinite effect
  const firstClone = slides[0].cloneNode(true);
  const lastClone = slides[totalSlides - 1].cloneNode(true);

  firstClone.classList.add('hero__slide--clone');
  lastClone.classList.add('hero__slide--clone');

  track.appendChild(firstClone);
  track.insertBefore(lastClone, slides[0]);

  // State
  let currentIndex = 1; // Start at 1 because of prepended clone
  let isDragging = false;
  let startX = 0;
  let startY = 0;
  let dragX = 0;
  let isHorizontalDrag = null;
  let isTransitioning = false;

  // Autoplay
  const AUTOPLAY_DELAY = 5000; // 5 seconds before autoplay starts
  const AUTOPLAY_INTERVAL = 5000; // 5 seconds between slides
  let autoplayTimer = null;
  let autoplayStartTimer = null;
  let startAutoplay;
  let stopAutoplay;
  let scheduleAutoplay;

  stopAutoplay = () => {
    if (autoplayTimer) {
      clearInterval(autoplayTimer);
      autoplayTimer = null;
    }
  };

  startAutoplay = () => {
    stopAutoplay();
    autoplayTimer = setInterval(() => {
      goToIndex(currentIndex + 1, true);
    }, AUTOPLAY_INTERVAL);
  };

  scheduleAutoplay = () => {
    stopAutoplay();
    if (autoplayStartTimer) {
      clearTimeout(autoplayStartTimer);
    }
    autoplayStartTimer = setTimeout(startAutoplay, AUTOPLAY_DELAY);
  };

  // Get slider width
  const getSliderWidth = () => slider.offsetWidth;

  // Update dot indicators (adjusted for clone offset)
  const updateDots = () => {
    const realIndex = getRealIndex();
    dots.forEach((dot, i) => {
      dot.classList.toggle('is-active', i === realIndex);
      dot.setAttribute('aria-selected', i === realIndex);
    });
  };

  // Get real index (0-based, without clone offset)
  const getRealIndex = () => {
    if (currentIndex === 0) return totalSlides - 1;
    if (currentIndex === totalSlides + 1) return 0;
    return currentIndex - 1;
  };

  // Set track position
  const setTrackPosition = (x, animate = false) => {
    if (animate) {
      track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
      isTransitioning = true;
    } else {
      track.style.transition = 'none';
      isTransitioning = false;
    }
    track.style.transform = `translate3d(${x}px, 0, 0)`;
  };

  // Go to specific index (internal, includes clones)
  const goToIndex = (index, animate = true) => {
    currentIndex = index;
    const targetX = -currentIndex * getSliderWidth();
    setTrackPosition(targetX, animate);
    updateDots();
  };

  // Go to specific slide (0-based, user-facing)
  const goToSlide = (slideIndex, animate = true) => {
    // Convert to internal index (add 1 for prepended clone)
    goToIndex(slideIndex + 1, animate);
  };

  // Handle infinite loop jump
  const handleTransitionEnd = () => {
    isTransitioning = false;

    // Jump to real slide without animation
    if (currentIndex === 0) {
      // Jumped to last clone, go to real last slide
      currentIndex = totalSlides;
      setTrackPosition(-currentIndex * getSliderWidth(), false);
    } else if (currentIndex === totalSlides + 1) {
      // Jumped to first clone, go to real first slide
      currentIndex = 1;
      setTrackPosition(-currentIndex * getSliderWidth(), false);
    }
  };

  track.addEventListener('transitionend', handleTransitionEnd);

  // Handle drag start
  const onDragStart = (e) => {
    if (e.target.closest('[data-hero-dot]')) return;
    if (isTransitioning) return;

    // Reset autoplay on interaction
    scheduleAutoplay();

    isDragging = true;
    isHorizontalDrag = null;
    slider.classList.add('is-dragging');

    const point = e.touches ? e.touches[0] : e;
    startX = point.clientX;
    startY = point.clientY;
    dragX = 0;

    track.style.transition = 'none';

    if (e.type === 'mousedown') {
      e.preventDefault();
    }
  };

  // Handle drag move
  const onDragMove = (e) => {
    if (!isDragging) return;

    const point = e.touches ? e.touches[0] : e;
    const deltaX = point.clientX - startX;
    const deltaY = point.clientY - startY;

    // Determine drag direction on first significant movement
    if (isHorizontalDrag === null) {
      const absX = Math.abs(deltaX);
      const absY = Math.abs(deltaY);

      if (absX > 5 || absY > 5) {
        isHorizontalDrag = absX > absY;

        if (!isHorizontalDrag) {
          isDragging = false;
          slider.classList.remove('is-dragging');
          return;
        }
      } else {
        return;
      }
    }

    if (e.cancelable) {
      e.preventDefault();
    }

    dragX = deltaX;

    // Calculate position
    const baseX = -currentIndex * getSliderWidth();
    const newX = baseX + dragX;

    setTrackPosition(newX, false);
  };

  // Handle drag end
  const onDragEnd = () => {
    if (!isDragging) return;

    isDragging = false;
    isHorizontalDrag = null;
    slider.classList.remove('is-dragging');

    const sliderWidth = getSliderWidth();
    const threshold = sliderWidth * 0.15;

    // Determine direction
    let targetIndex = currentIndex;

    if (dragX < -threshold) {
      targetIndex = currentIndex + 1;
    } else if (dragX > threshold) {
      targetIndex = currentIndex - 1;
    }

    goToIndex(targetIndex, true);
  };

  // Mouse events
  slider.addEventListener('mousedown', onDragStart);
  window.addEventListener('mousemove', onDragMove);
  window.addEventListener('mouseup', onDragEnd);

  // Touch events
  slider.addEventListener('touchstart', onDragStart, { passive: true });
  slider.addEventListener('touchmove', onDragMove, { passive: false });
  slider.addEventListener('touchend', onDragEnd);
  slider.addEventListener('touchcancel', onDragEnd);

  // Dot navigation
  dots.forEach((dot) => {
    dot.addEventListener('click', (e) => {
      e.stopPropagation();
      scheduleAutoplay();
      const index = parseInt(dot.dataset.heroDot, 10);
      if (!isNaN(index)) {
        goToSlide(index, true);
      }
    });
  });

  // Keyboard navigation
  slider.setAttribute('tabindex', '0');
  slider.addEventListener('keydown', (e) => {
    scheduleAutoplay();
    if (e.key === 'ArrowLeft') {
      goToIndex(currentIndex - 1, true);
    } else if (e.key === 'ArrowRight') {
      goToIndex(currentIndex + 1, true);
    }
  });

  // Handle resize
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      setTrackPosition(-currentIndex * getSliderWidth(), false);
    }, 100);
  });

  // Initialize - start at first real slide (index 1)
  setTrackPosition(-getSliderWidth(), false);
  updateDots();

  // Start autoplay after initialization
  scheduleAutoplay();
})();

/**
 * Car Showcase Tabs
 * Switch between different car showcases
 */
(() => {
  const tabs = Array.from(document.querySelectorAll('[data-tab]'));
  const showcases = Array.from(document.querySelectorAll('[data-showcase]'));

  if (tabs.length === 0 || showcases.length === 0) return;

  const showShowcase = (tabId) => {
    // Update tabs
    tabs.forEach((tab) => {
      tab.classList.toggle('is-active', tab.dataset.tab === tabId);
    });

    // Update showcases
    showcases.forEach((showcase) => {
      showcase.classList.toggle('is-active', showcase.dataset.showcase === tabId);
    });
  };

  // Tab click and hover handlers
  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      showShowcase(tab.dataset.tab);
    });

    tab.addEventListener('mouseenter', () => {
      showShowcase(tab.dataset.tab);
    });
  });

  // Initialize - show first tab
  const firstTab = tabs[0];
  if (firstTab) {
    showShowcase(firstTab.dataset.tab);
  }
})();

/**
 * Car Showcase Slider
 * Arrow navigation slider for car cards
 */
(() => {
  const showcases = Array.from(document.querySelectorAll('[data-showcase]'));

  if (showcases.length === 0) return;

  // Get number of visible cards based on viewport width
  const getVisibleCards = () => {
    const width = window.innerWidth;
    if (width >= 1500) return 4;
    if (width >= 768) return 3;
    return 2;
  };

  // Initialize each showcase slider
  showcases.forEach((showcase) => {
    const track = showcase.querySelector('.car-showcase__track');
    const cards = Array.from(showcase.querySelectorAll('.car-card'));
    const prevBtn = showcase.querySelector('[data-showcase-prev]');
    const nextBtn = showcase.querySelector('[data-showcase-next]');

    if (!track || cards.length === 0) return;

    let currentIndex = 0;

    const getCardWidth = () => {
      if (cards.length === 0) return 0;
      const card = cards[0];
      const width = card.offsetWidth;
      // Gap is 2rem = 20px at default font size
      const gap = 20;
      return width + gap;
    };

    const getMaxIndex = () => {
      const visibleCards = getVisibleCards();
      return Math.max(0, cards.length - visibleCards);
    };

    const updateButtons = () => {
      const maxIndex = getMaxIndex();
      if (prevBtn) {
        prevBtn.disabled = currentIndex === 0;
      }
      if (nextBtn) {
        nextBtn.disabled = currentIndex >= maxIndex;
      }
    };

    const slideTo = (index, animate = true) => {
      const maxIndex = getMaxIndex();
      currentIndex = Math.max(0, Math.min(maxIndex, index));

      const offset = -currentIndex * getCardWidth();

      if (animate) {
        track.style.transition = 'transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
      } else {
        track.style.transition = 'none';
      }

      track.style.transform = `translate3d(${offset}px, 0, 0)`;
      updateButtons();
    };

    // Arrow click handlers
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        slideTo(currentIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        slideTo(currentIndex + 1);
      });
    }

    // Handle resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        slideTo(currentIndex, false);
      }, 100);
    });

    // Initialize
    slideTo(0, false);
  });
})();



// Burger mobile menu
(() => {
  const button = document.getElementById('mobile-menu-button');
  const header = document.getElementById('site-header');
  const menuToggles = document.querySelectorAll('.menu-item-toggle');

  if (!button || !header) return;

  menuToggles.forEach((toggle) => {
    toggle.addEventListener('click', () => {
      toggle.classList.toggle("menu-open");
    });
  });

  button.addEventListener('click', () => {
    header.classList.toggle("is-active");
  });

})();

/**
 * Mobile Menu Model Sliders
 * Scrollable car cards in mobile menu with drag support
 */
(() => {
  const header = document.getElementById('site-header');
  if (!header) return;

  const swipers = header.querySelectorAll('.sub-menus__models .swiper');

  swipers.forEach((swiper) => {
    const wrapper = swiper.querySelector('.swiper-wrapper');
    const slides = Array.from(swiper.querySelectorAll('.swiper-slide'));
    const prevBtn = swiper.querySelector('[class*="swiper-button-prev"]');
    const nextBtn = swiper.querySelector('[class*="swiper-button-next"]');

    if (!wrapper || slides.length === 0) return;

    let currentIndex = 0;
    let isDragging = false;
    let startX = 0;
    let startY = 0;
    let dragX = 0;
    let startTranslate = 0;
    let isHorizontalDrag = null;

    const getSlideWidth = () => {
      if (slides.length === 0) return 0;
      const slide = slides[0];
      const style = window.getComputedStyle(slide);
      const width = slide.offsetWidth;
      const marginRight = parseInt(style.marginRight) || 0;
      return width + marginRight;
    };

    const getMaxIndex = () => {
      return Math.max(0, slides.length - 1);
    };

    const updateButtons = () => {
      const maxIndex = getMaxIndex();
      if (prevBtn) {
        prevBtn.classList.toggle('swiper-button-disabled', currentIndex === 0);
        prevBtn.setAttribute('aria-disabled', currentIndex === 0);
      }
      if (nextBtn) {
        nextBtn.classList.toggle('swiper-button-disabled', currentIndex >= maxIndex);
        nextBtn.setAttribute('aria-disabled', currentIndex >= maxIndex);
      }
    };

    const slideTo = (index, animate = true) => {
      const maxIndex = getMaxIndex();
      currentIndex = Math.max(0, Math.min(maxIndex, index));

      const offset = -currentIndex * getSlideWidth();

      if (animate) {
        wrapper.style.transition = 'transform 0.3s ease';
      } else {
        wrapper.style.transition = 'none';
      }

      wrapper.style.transform = `translate3d(${offset}px, 0, 0)`;
      updateButtons();
    };

    const setPosition = (x) => {
      wrapper.style.transition = 'none';
      wrapper.style.transform = `translate3d(${x}px, 0, 0)`;
    };

    // Drag handlers
    const onDragStart = (e) => {
      if (e.target.closest('[class*="swiper-button"]')) return;

      isDragging = true;
      isHorizontalDrag = null;

      const point = e.touches ? e.touches[0] : e;
      startX = point.clientX;
      startY = point.clientY;
      dragX = 0;
      startTranslate = -currentIndex * getSlideWidth();
    };

    const onDragMove = (e) => {
      if (!isDragging) return;

      const point = e.touches ? e.touches[0] : e;
      const deltaX = point.clientX - startX;
      const deltaY = point.clientY - startY;

      // Determine drag direction on first significant movement
      if (isHorizontalDrag === null) {
        const absX = Math.abs(deltaX);
        const absY = Math.abs(deltaY);

        if (absX > 5 || absY > 5) {
          isHorizontalDrag = absX > absY;

          if (!isHorizontalDrag) {
            // Vertical scroll - cancel drag and allow normal scrolling
            isDragging = false;
            return;
          }

          // Horizontal drag confirmed
          swiper.classList.add('is-dragging');
        } else {
          return;
        }
      }

      dragX = deltaX;

      let newX = startTranslate + dragX;

      // Add resistance at edges
      const maxOffset = 0;
      const minOffset = -(slides.length - 1) * getSlideWidth();

      if (newX > maxOffset) {
        newX = maxOffset + (newX - maxOffset) * 0.3;
      } else if (newX < minOffset) {
        newX = minOffset + (newX - minOffset) * 0.3;
      }

      setPosition(newX);

      if (e.cancelable) {
        e.preventDefault();
      }
    };

    const onDragEnd = () => {
      if (!isDragging) return;

      isDragging = false;
      isHorizontalDrag = null;
      swiper.classList.remove('is-dragging');

      const slideWidth = getSlideWidth();
      const threshold = slideWidth * 0.2;

      let targetIndex = currentIndex;

      if (dragX < -threshold) {
        targetIndex = currentIndex + 1;
      } else if (dragX > threshold) {
        targetIndex = currentIndex - 1;
      }

      slideTo(targetIndex, true);
    };

    // Mouse events
    swiper.addEventListener('mousedown', onDragStart);
    window.addEventListener('mousemove', onDragMove);
    window.addEventListener('mouseup', onDragEnd);

    // Touch events
    swiper.addEventListener('touchstart', onDragStart, { passive: true });
    swiper.addEventListener('touchmove', onDragMove, { passive: false });
    swiper.addEventListener('touchend', onDragEnd);
    swiper.addEventListener('touchcancel', onDragEnd);

    // Arrow click handlers
    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        slideTo(currentIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        slideTo(currentIndex + 1);
      });
    }

    // Initialize
    slideTo(0, false);
  });
})();

/**
 * Car Gallery Color Picker
 * Display car images based on color tab hover/selection
 */
(() => {
  const gallery = document.querySelector('[data-car-gallery]');
  if (!gallery) return;

  const viewport = gallery.querySelector('.car-gallery__viewport');
  const tabs = Array.from(document.querySelectorAll('.car-gallery__tabs-tab'));

  if (!viewport || tabs.length === 0) return;

  let currentImage = null;
  let colorOverlay = null;
  let isTransitioning = false;
  let currentImageUrl = null;

  // Create overlay element once
  colorOverlay = document.createElement('div');
  colorOverlay.className = 'car-gallery__overlay';
  viewport.appendChild(colorOverlay);

  const createImage = (src) => {
    const img = document.createElement('img');
    img.className = 'car-gallery__image is-fading';
    img.alt = 'Car color variant';
    img.src = src;
    return img;
  };

  const displayCarImage = (tab, animate = true) => {
    const imageUrl = tab.dataset.carImage;
    const bgColor = tab.dataset.color;

    if (!imageUrl) return;

    // Skip if same image or already transitioning
    if (imageUrl === currentImageUrl || isTransitioning) return;

    // Update active state
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    // Apply overlay color if provided
    if (bgColor) {
      colorOverlay.style.background = bgColor;
    }

    // Animated transition
    if (animate && currentImage) {
      isTransitioning = true;
      const oldImage = currentImage;

      // Fade out old image
      oldImage.classList.add('is-fading');

      // Preload new image
      const preload = new Image();
      preload.onload = () => {
        // After fade out, remove old and add new
        setTimeout(() => {
          oldImage.remove();

          // Create new image (starts hidden with is-fading)
          currentImage = createImage(imageUrl);
          currentImageUrl = imageUrl;
          viewport.insertBefore(currentImage, colorOverlay);

          // Trigger fade in on next frame
          requestAnimationFrame(() => {
            requestAnimationFrame(() => {
              currentImage.classList.remove('is-fading');
              setTimeout(() => {
                isTransitioning = false;
              }, 250);
            });
          });
        }, 250);
      };
      preload.src = imageUrl;
    } else {
      // Initial load - no animation
      currentImage = createImage(imageUrl);
      currentImageUrl = imageUrl;
      viewport.insertBefore(currentImage, colorOverlay);
      // Show immediately
      requestAnimationFrame(() => {
        currentImage.classList.remove('is-fading');
      });
    }
  };

  // Tab hover handlers
  tabs.forEach((tab) => {
    tab.addEventListener('mouseenter', () => {
      displayCarImage(tab, true);
    });
  });

  // Initialize - display active tab's image
  const activeTab = document.querySelector('.car-gallery__tabs-tab.active') || tabs[0];
  if (activeTab) {
    displayCarImage(activeTab, false);
  }
})();

/**
 * Car Interior Slider
 * Horizontal slider with tab controls and drag support
 */
(() => {
  const container = document.querySelector('[data-interior-slider]');
  if (!container) return;

  const track = container.querySelector('.car-interior__slider-track');
  const slides = Array.from(container.querySelectorAll('.car-interior__slider-slide'));
  const tabs = Array.from(document.querySelectorAll('[data-interior-tab]'));

  if (!track || slides.length === 0) return;

  let currentIndex = 0;
  let isDragging = false;
  let startX = 0;
  let startY = 0;
  let dragX = 0;
  let isHorizontalDrag = null;

  const getSlideWidth = () => container.offsetWidth;

  const updateTabs = () => {
    tabs.forEach((tab, i) => {
      tab.classList.toggle('active', i === currentIndex);
    });
  };

  const slideTo = (index, animate = true) => {
    currentIndex = Math.max(0, Math.min(slides.length - 1, index));
    const offset = -currentIndex * getSlideWidth();

    if (animate) {
      track.style.transition = 'transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    } else {
      track.style.transition = 'none';
    }

    track.style.transform = `translate3d(${offset}px, 0, 0)`;
    updateTabs();
  };

  const setPosition = (x) => {
    track.style.transition = 'none';
    track.style.transform = `translate3d(${x}px, 0, 0)`;
  };

  // Drag handlers
  const onDragStart = (e) => {
    if (e.target.closest('[data-interior-tab]')) return;

    isDragging = true;
    isHorizontalDrag = null;
    container.classList.add('is-dragging');

    const point = e.touches ? e.touches[0] : e;
    startX = point.clientX;
    startY = point.clientY;
    dragX = 0;

    track.style.transition = 'none';

    if (e.type === 'mousedown') {
      e.preventDefault();
    }
  };

  const onDragMove = (e) => {
    if (!isDragging) return;

    const point = e.touches ? e.touches[0] : e;
    const deltaX = point.clientX - startX;
    const deltaY = point.clientY - startY;

    // Determine drag direction
    if (isHorizontalDrag === null) {
      const absX = Math.abs(deltaX);
      const absY = Math.abs(deltaY);

      if (absX > 5 || absY > 5) {
        isHorizontalDrag = absX > absY;

        if (!isHorizontalDrag) {
          isDragging = false;
          container.classList.remove('is-dragging');
          return;
        }
      } else {
        return;
      }
    }

    if (e.cancelable) {
      e.preventDefault();
    }

    dragX = deltaX;

    const baseX = -currentIndex * getSlideWidth();
    let newX = baseX + dragX;

    // Resistance at edges
    const minX = -(slides.length - 1) * getSlideWidth();
    if (newX > 0) {
      newX = newX * 0.3;
    } else if (newX < minX) {
      newX = minX + (newX - minX) * 0.3;
    }

    setPosition(newX);
  };

  const onDragEnd = () => {
    if (!isDragging) return;

    isDragging = false;
    isHorizontalDrag = null;
    container.classList.remove('is-dragging');

    const slideWidth = getSlideWidth();
    const threshold = slideWidth * 0.15;

    let targetIndex = currentIndex;

    if (dragX < -threshold) {
      targetIndex = currentIndex + 1;
    } else if (dragX > threshold) {
      targetIndex = currentIndex - 1;
    }

    slideTo(targetIndex, true);
  };

  // Mouse events
  container.addEventListener('mousedown', onDragStart);
  window.addEventListener('mousemove', onDragMove);
  window.addEventListener('mouseup', onDragEnd);

  // Touch events
  container.addEventListener('touchstart', onDragStart, { passive: true });
  container.addEventListener('touchmove', onDragMove, { passive: false });
  container.addEventListener('touchend', onDragEnd);
  container.addEventListener('touchcancel', onDragEnd);

  // Tab hover handlers
  tabs.forEach((tab) => {
    tab.addEventListener('mouseenter', () => {
      const index = parseInt(tab.dataset.interiorTab, 10);
      if (!isNaN(index)) {
        slideTo(index, true);
      }
    });
  });

  // Handle resize
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      slideTo(currentIndex, false);
    }, 100);
  });

  // Initialize
  slideTo(0, false);
})();

/**
 * Hero Scroll Down Button
 * Smooth scroll 100vh down when clicking the action button
 */
(() => {
  const scrollBtn = document.querySelector('.generic-hero__action-btn');
  if (!scrollBtn) return;

  scrollBtn.addEventListener('click', () => {
    const viewportHeight = window.innerHeight;

    window.scrollTo({
      top: viewportHeight,
      behavior: 'smooth'
    });
  });
})();
