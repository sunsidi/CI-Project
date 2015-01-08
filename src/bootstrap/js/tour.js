var tour = new Tour({
  	
  steps: [
  {
	path:"",
	//element:"#start-tour",
	element: ".start-tour",
    title: "Welcome to Wrevel",
    content: "Click through this simple tour and you will be Wreveling in minutes!",
	orphan:true,
  },
  {
	//need to change path
	path:"/wrevel/showroom/profile",
	element: "#showroom-step",
    title: "Showroom",
    content: "This is your user profile where you can put your personal info, upload content, and connect with friends.",
	placement: "top",
	orphan:true, //need to remove the id if wants popup to be fixed in the middle
  },
  {
	path:"/wrevel/event/hub",
	element: "#hub-step",
    title: "The Hub",
    content: "Here is the heart of the website. You can keep track of your events, find like-minded people, and stay updated on what your friends are up to.",
	placement:"top",
	orphan:true, //need to remove the id if wants popup to be fixed in the middle
  },
  {
	path:"/wrevel/main/mywrevs",
	element: "#mywrevs-step",
    title: "My Wrevs",
    content: "There are 12 different types of categories to choose from. Never be bored again!",
	placement:"top",
  },
  {
	path:"",
	element: "#create-step",
    title: "Create a Wrev",
    content: "Create your free or paid event in minutes",
	placement:"bottom",
  },
  {
	path:"/wrevel/account/myaccount_accountinfo",
	element: "#myaccount-step1",
    title: "Account Information",
    content: "You can make changes to your profile and your preferences here. You can also set up your bank account to receive money for paid events thrown as well as save your credit card info for quick payment options.",
	placement:"left",
	backdropPadding:5,
  },
  {
	path:"/wrevel/account/myaccount_eventlisting",
	element: "#myaccount-step2",
    title: "My Events Listing",
    content: "Monitor and change events that you are throwing. See if you need to change any details.",
	placement:"left",

  },
  {
	path:"/wrevel/account/myaccount_ticketmanagement",
	element: "#myaccount-step3",
    title: "Ticket Sales Management",
    content: "Monitor the people that are attending your events. Keep track of ticket payments and use the system to analyze the sales.",
	placement:"left",
	
  },
  {
	path:"/wrevel/wrevenues/wrevenues_main",
	element: "#wrevenues-step",
    title: "Wrevenues",
    content: "Create a page for your venue so that Wrevel users can find and book your events.",
	placement:"top",
  },
  {
	path:"",
	element: ".final-step",
    content: "You're all set. Get ready to discover, socialize, and experience!",
	placement:"top",
	orphan:true,
  }
  ],
  backdrop: true,
  debug:true,	
  redirect: true,
  
  //tour starts everytime page is loaded, might need to remove this for site
  //storage: false,
});
// Initialize the tour
tour.init();

// Start the tour
tour.start();
