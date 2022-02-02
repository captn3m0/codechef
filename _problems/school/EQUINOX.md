---
{"category_name":"school","problem_code":"EQUINOX","problem_name":"Equinox Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n\t4 1 3\r\n\tABBBCDDE\r\n\tEARTH\r\n\tINDIA\r\n\tUUUFFFDDD\r\n\t2 5 7\r\n\tSDHHD\r\n\tXOXOXOXO","output":"DRAW\r\n\tANURADHA","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/-0jUTC4N-K0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"18-04-2021","tags":{"0":"cakewalk","1":"ltime95","2":"zankanotachi"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EQUINOX","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EQUINOX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Sarthak and Anuradha are very good friends and are eager to participate in an event called *Equinox*. It is a game of words. In this game, $N$ strings $S_1,\ldots, S_N$ are given. For each string $S_i$, if it starts with one of the letters of the word “EQUINOX”, Sarthak gets $A$ points and if not, Anuradha gets $B$ points. The one who has more points at the end of the game wins. If they both the same number of points, the game is a draw..

Print the winner of the game, if any, otherwise print “DRAW”.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The first line of each test case contains three integers $N$, $A$, $B$.
- $N$ lines follow, each containing a string $S_{i}$.
- All strings are in UPPERCASE.

###Output
- For each test case, print “SARTHAK” (case insensitive) if he has more points than Anuradha, print “ANURADHA” (case insensitive) if she has more points than Sarthak, otherwise print “DRAW” (case insensitive), without the quotes.

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq N \leq 100$
- $1 \leq A$, $B \leq 10^{9}$
- $1 \leq \left|S_{i}\right| \leq 100$

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
	2
	4 1 3
	ABBBCDDE
	EARTH
	INDIA
	UUUFFFDDD
	2 5 7
	SDHHD
	XOXOXOXO


###Sample Output
	DRAW
	ANURADHA

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>