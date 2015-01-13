var tour = new Tour({
  steps: [
  {
	path:"",
	element: "#start-tour",
    title: "Welcome to Wrevel",
    content: "Click through this simple tour and you will be Wreveling in minutes!"
  },
  {
	//remove wrevel from path when pushed to site
	path:"/wrevel/showroom/profile",
	element: "#showroom-step",
    title: "Showroom",
    content: "This is your user profile where you can put your personal info, upload content, and connect with friends.",
	placement: "top"
  },
  {
	path:"/wrevel/event/hub",
	element: "#hub-step",
    title: "The Hub",
    content: "Here is the heart of the website. You can keep track of your events, find like-minded people, and stay updated on what your friends are up to."
  },
  {
	path:"/wrevel/main/mywrevs",
	element: "#mywrevs-step",
    title: "My Wrevs",
    content: "There are 12 different types of categories to choose from. Never be bored again!"
  },
  {
	path:"/wrevel/account/myaccount_accountinfo",
	element: "#myaccount-step1",
    title: "Account Information",
    content: "You can make changes to your profile and your preferences here. You can also set up your bank account to receive money for paid events thrown as well as save your credit card info for quick payment options."
  },
  {
	path:"/wrevel/account/myaccount_eventlisting",
	element: "#myaccount-step2",
    title: "My Events Listing",
    content: "Monitor and change events that you are throwing. See if you need to change any details."
  },
  {
	path:"/wrevel/account/myaccount_ticketmanagement",
	element: "#myaccount-step3",
    title: "Ticket Sales Management",
    content: "Monitor and change events that you are throwing. See if you need to change any details. "
  },
  {
	path:"/wrevel/wrevenues/wrevenues_main",
	element: "#wrevenues-step",
    title: "Wrevenues",
    content: "Create a page for your venue so that Wrevel users can find and book your events."
  },
  {
	path:"/",
	element: "#final-step",
    content: "You're all set. Get ready to discover, socialize, and experience!"
  }
  ],
  backdrop: true,
  storage: false,
});
// Initialize the tour
tour.init();

// Start the tour
tour.start();
