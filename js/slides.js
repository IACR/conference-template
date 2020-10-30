/**
 * This ES6 class provides a slideshow with buttons to move right and left.
 * It is constructed with an id for a carousel-wrapper div. The way it works
 * is to add and remove classes of "active", "next", and "previous", relying
 * upon CSS transitions to slide the cards into place. The CSS and DOM structure
 * is contained in program.php. It uses a variable called "moving" to detect
 * when a transition is in progress, and blocks further movement during
 * this time. If a slideshow has only 1 slide then it's just a no-op, but
 * it should contain at least one slide.
*/
class SlideShow {
  constructor(id) {
    this.id = id;
    this.root = document.getElementById(id);
    this.items = this.root.querySelectorAll('.slide_card');
    this.totalItems = this.items.length;
    this.root.querySelector('.slide_count').textContent = this.totalItems;
    this.slide = 0;
    // The next slide to the right
    this.next = 1;
    // the next slide to the left
    this.previous = this.totalItems - 1;
    // We use this to keep track of whether a transition is in progress.
    // It is initially set to true while we set things up.      
    this.moving = true;
    // Target the last, initial, and next items and give them the relevant class.
    // This assumes there are three or more items.
    this.items[this.slide].classList.add("active");
    this.items[this.previous].classList.add("prev");
    this.items[this.next].classList.add("next");
    // Set click events to navigation buttons
    this.root.querySelector('.slide-next-butt').addEventListener('click', () => this.moveNext());
    this.root.querySelector('.slide-prev-butt').addEventListener('click', () => this.movePrev());
    // Set moving to false now that the carousel is ready
    this.moving = false;
  }

  // Temporarily disable interaction by setting 'moving' to true for
  // the same duration as our transition (500ms).
  disableInteraction() {
    this.moving = true;
    setTimeout(this.enableInteraction.bind(this), 500);
  }

  // This is only called after a timeout following disableInteraction()
  enableInteraction() {
    this.moving = false;
  }

  // Next navigation handler
  moveNext() {
    // Check if moving
    if (!this.moving) {

      // If it's the last slide, reset to 0, else +1
      let nextSlide = (this.slide === (this.totalItems - 1)) ? 0 : this.slide + 1;
      this.moveCarousel(nextSlide);
    }
  }

  // Previous navigation handler
  movePrev() {

    // Check if moving
    if (!this.moving) {

      // If it's the first slide, set as the last slide, else -1
      let nextSlide = (this.slide === 0) ? this.totalItems - 1 : this.slide - 1;
      this.moveCarousel(nextSlide);
    }
  }

  // This handles transition to a new slide, effectively resetting the
  // classes "active", "next", and "prev".
  moveCarousel(newSlide) {
    // Check if carousel is moving, if not, allow interaction
    if(!this.moving && this.totalItems > 1) {
      // temporarily disable interactivity
      this.disableInteraction();
      
      // Preemptively set variables for the current next and previous slide,
      // as well as the potential next or previous slide.
      let newPrevious = newSlide - 1,
          newNext = newSlide + 1,
          oldPrevious = this.previous,
          oldNext = this.next;

      // Checks if the new potential slide is out of bounds and sets slide numbers
      if (newPrevious < 0) {
        newPrevious = this.totalItems - 1;
      }
      if (newNext >= this.totalItems){
        newNext = 0;
      }
      this.next = newNext;
      this.previous = newPrevious;

      // Now we've worked out where we are and where we're going, by adding and
      // removing classes, we'll be triggering the carousel's transitions.

      this.items[this.slide].classList.remove('active');
      this.slide = newSlide;
      this.items[oldPrevious].classList.remove('prev');
      this.items[oldNext].classList.remove('next');
      
      // Add the new classes
      this.items[newSlide].classList.add('active');
      this.items[newPrevious].classList.add('prev');
      this.items[newNext].classList.add('next');
      this.root.querySelector('.slide_selected').textContent = (this.slide + 1);
    }
  }
}
