---
{"category_name":"easy","problem_code":"BIT2B","problem_name":"B - Candy Love","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chiraag3200","problem_tester":null,"date_added":"1-08-2019","tags":{"0":"bit22019","1":"chiraag3200"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIT2B","time":{"view_start_date":1569002400,"submit_start_date":1569002400,"visible_start_date":1569002400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIT2B","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has  $N$ boxes arranged in a line.Each box has some candies in it,say $C[i]$. Chef wants to distribute all the candies between of his friends: $A$ and $B$, in the following way:

$A$ starts eating candies kept in the leftmost box(box at $1$st place) and $B$ starts eating candies kept in the rightmost box(box at $N$th place). $A$ eats  candies $X$ times faster than $B$ i.e. $A$ eats $X$ candies when $B$ eats only $1$. Candies in each box can be eaten by only the person who reaches that box first. If both reach a box at the same time, then the one who has eaten from more number of BOXES till now will eat the candies in that box. If both have eaten from the same number of boxes till now ,then $A$ will eat the candies in that box.
Find the number of boxes finished by both $A$ and $B$.

**NOTE:-** We assume that it does not take any time to switch from one box to another.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains three lines of input.
 The first line of each test case contains $N$, the number of boxes.
- The second line of each test case contains a sequence,$C_1$ ,$C_2$ ,$C_3$ . . . $C_N$ where $C_i$ denotes the number of candies in the i-th box.  
- The third line of each test case contains an integer $X$ .

###Output:
For each testcase, print two space separated integers in a new line - the number of boxes eaten by $A$  and  $B$ respectively. 

###Constraints 
- $1 \leq T \leq 100$
- $1 \leq N \leq 200000$
- $1 \leq C_i \leq 1000000$
- $1 \leq X \leq 10$
- Sum of $N$ over all test cases does not exceed $300000$

###Subtasks
Subtask 1(24 points):
- $1 \leq T \leq 10$
- $1 \leq N \leq 1000$
- $1 \leq C_i \leq 1000$
- $1 \leq X \leq 10$

Subtask 2(51 points): original constraints
###Sample Input:
	1
	5
    2 8 8 2 9
    2
   

###Sample Output:
	4 1
	
###EXPLANATION:
$A$ will start eating candies in the 1st box(leftmost box having 2 candies) . $B$ will start eating candies in the  5th box(rightmost box having 9 candies) .As $A's$ speed is 2 times as that of $B's$, $A$ will start eating candies in the  2nd box while $B$ would still be eating candies in the 5th box.$A$ will now start eating candies from the 3rd box while $B$ would still be eating candies in the 5th box.Now both $A$ and $B$ will finish candies in their respective boxes at the same time($A$ from the 3rd box and $B$ from 5th box). Since $A$ has eaten more number of boxes($A$ has eaten 3 boxes while $B$ has eaten 1 box) till now,so $A$ will be eating candies in the 4th box.
Hence $A$ has eaten 4 boxes and $B$ has eaten 1 box.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>