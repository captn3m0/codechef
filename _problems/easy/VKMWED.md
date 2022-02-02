---
{"category_name":"easy","problem_code":"VKMWED","problem_name":"Magic Weed","problemComponents":{"constraints":"- $1 \\leq T \\leq 2000$\n- $0 \\leq N \\leq 10^5$\n- $0 \\leq M \\leq 10^5$\n- Sum of $N$ over all test cases will not exceed $10^6$\n- Sum of $M$ over all test cases will not exceed $10^6$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of test cases. The description of $T$ test cases follows.\n- Each test case consists of a single line of input, containing two space-separated integers $N$ and $M$.\n","inputFormatState":true,"outputFormat":"For each test case, output a single line containing the answer - the possible number of fights between Faizal and Sultan, modulo $10^9 + 7$.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n2 1\n12 6\n6969 8563","output":"7\n255\n988402422\n","explanation":"**Test Case 1:** The death sequences corresponding to the $7$ possible fights are:\n- SS\n- SFS\n- FSS\n- FSFS\n- FF\n- SFF\n- FSFF","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"abhinav2302","problem_tester":"","date_added":"30-09-2021","tags":{"0":"abhinav2302","1":"combinatorics","2":"csns2021","3":"easy","4":"math"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VKMWED","time":{"view_start_date":1635960600,"submit_start_date":1635960600,"visible_start_date":1635960600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VKMWED","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Faizal and Sultan are having a one-on-one faceoff. Before stepping into the fight, each of them smoked a special kind of weed from Jhalwa. Smoking $k$ grams of this weed can grant the smoker the ability to resurrect $k$ times after dying. Sultan smoked $M$ grams of this weed, and Faizal smoked $N$ grams of this weed. 


However, Faizal being an addict since childhood has developed a side effect, the abilities of this weed come with a condition for him(Faizal): if Faizal dies, he gains back his resurrection power only after he has killed Sultan at least once after having resurrected from his(Faizal's) last death i.e the weed will become temporarily disabled after the resurrection, to be reactivated Faizal needs to kill Sultan whereas Sultan can resurrect any time. 

Faizal's wife Mohsina is getting anxious about the fight, she wants you to find the possible number of ways the fight between Faizal and Sultan can go.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>