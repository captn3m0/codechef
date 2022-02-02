---
{"category_name":"easy","problem_code":"GMSTN","problem_name":"Better call Saul!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zappelectro","problem_tester":"","date_added":"10-10-2020","tags":{"0":"game","1":"infy20","2":"zappelectro"},"problem_difficulty_level":"Easy","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/GMSTN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GMSTN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
_"Don't Drink and Drive, but when you do, Better Call Saul."_

Once Jesse and Walter were fighting over extra cash, and Saul decided to settle it with a game of stone piles whose winner gets the extra money. The game is described as follows :

There are $N$ piles of stones with $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...$ $A$<sub>$N$</sub> stones in each pile. 

Jesse and Walter move alternately, and **in one move, they remove one pile entirely**. 

After a total of $X$ moves, if the **Sum** of all the remaining piles is **odd**, Walter wins the game and gets the extra cash, else Jesse is the winner.

**Walter moves first**. 

Determine the winner of the game if both of them play optimally. 

###Input:

- The first line will contain $T$, number of testcases. $T$ testcases follow : 
- The first line of each testcase contains two space-separated integers $N, X$. 
- The second line of each testcase contains $N$ space-separated integers $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...,$$A$<sub>$N$</sub>.

###Output:
For each test case, print a single line containing the string "Jesse" (without quotes), if Jesse wins the game or "Walter" (without quotes) if Walter wins.

###Constraints 
- $1 \leq T \leq 10^4$
- $2 \leq N \leq 10^5$
- $1 \leq X \leq N-1$
- $1 \leq A$<sub>$i$</sub> $ \leq 100$
- The sum of $N$ over all test cases does not exceed $10^6$

###Sample Input:
	2
    5 3
    4 4 4 3 4
    7 4
    3 3 1 1 1 2 4


###Sample Output:
	Jesse
    Walter
	
###EXPLANATION:
- For Test Case 1 : Playing optimally, Walter removes 4. Jesse removes 3 and then Walter removes 4. Jesse wins as $4 + 4 = 8$ is even.

- For Test Case 2 : Playing optimally, Walter removes 4, Jesse removes 3, Walter removes 2 and Jesse removes 1. Walter wins as  $3 + 3 + 1 = 7$ is odd.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>