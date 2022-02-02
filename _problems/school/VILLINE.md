---
{"category_name":"school","problem_code":"VILLINE","problem_name":"Recruit Villagers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/V-dZLLDVTgs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"priyam2k","problem_tester":"","date_added":"7-01-2020","tags":{"0":"maths","1":"plit2020","2":"priyam2k"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VILLINE","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VILLINE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
WW3 is near and Gru wants to recruit minions for his team. Gru went to the planet of minions to recruit minions, he saw that there are two villages separated by a river. He cannot recruit minions from both villages because then his team will have internal conflicts. 

Gru is now in a dilemma about which village to recruit as he wants to have the strongest possible team.

You are given coordinates of houses on the planet. Each house has exactly one minion and his power is given. The planet of minion is considered as a 2-D plane and the river is denoted by a straight line ( $y=mx+c$ ). 
$Note:$ None of the houses are situated on the river.
###Input:

- First-line will contain $N$, number of houses. 
- Second-line will contain two integers, $m$ and $c$ denoting the river.
- Next $N$ lines will have exactly 3 integers $X[i], Y[i], P[i]$ denoting the coordinates of houses and the power of minion in that house 

###Output:
- Print the maximum power of the team which Gru can recruit.


###Constraints 
- $1 \leq N \leq 10^5$
- $-10^4 \leq m,c \leq 10^4$
- $-10^4 \leq X[i], Y[i] \leq 10^4$
- $ 1 \leq P[i] \leq 10^4$




###Sample Input:
	3
	1 0
	0 5 5
	0 6 5
	0 -8 20

###Sample Output:
	20
	

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>