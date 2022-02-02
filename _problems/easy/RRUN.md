---
{"category_name":"easy","problem_code":"RRUN","problem_name":"Los Pollos Hermanos","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nishitsharma03","problem_tester":"","date_added":"11-10-2020","tags":{"0":"infy20","1":"math","2":"nishitsharma03","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RRUN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RRUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
_"I hide in plain sight, just as you"_.

Gus Fring has earned a huge profit from Los Pollos Hermanos and he wishes to celebrate. He loves watching horse-riding, hence he bought $N$ horses.
One day he organizes a horse-riding competition to celebrate the deal with Don Eladio.

There are $N$ horses taking part in the competition with speeds of $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...,$ $A$<sub>$N$</sub> respectively. It is given that all speeds are **distinct**.

Multiple races are being conducted and it is **not mandatory** for each horse to participate in every race.

For the $i$<sup>$th$</sup> horse, find the number of subsets with size $\geq$ $2$ such that if a race were to be conducted between horses in this subset then the $i$<sup>$th$</sup> horse would finish in the **top three**.

For subsets of size 2 the runner should finish either 1st or 2nd. There is no 3rd position when the size of the subset is 2.

Since the answer might be quite large, compute it, modulo $1000000007$ $(10^9+7)$.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- First line of each testcase contains of a single integer $N$ denoting the number of horses.
- The second line of each testcase contains $N$ space-separated integers $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...,$$A$<sub>$N$</sub>, denoting the speeds of the horses. 

###Output:
For each testcase, output a single line containing $N$ space separated integers , where the $i$<sup>$th$</sup> integer denotes the number of subsets of size $\geq$ $2$ modulo $(10^9+7)$, such that the $i$<sup>$th$</sup> horse finishes in the top three.

###Constraints 
- $1 \leq T \leq 5000$
- $2 \leq N \leq 10^5$
- $1 \leq A[i] \leq 10^9$
- All speeds are distinct
- Sum of N over all test cases does not exceed $5*10^5$


###Sample Input:
	1
	4
    4 2 3 1



###Sample Output:
	7 7 7 6
	
###EXPLANATION:
For the 1<sup>st</sup> horse the 7 subsets are-  $ [4,2,3,1],[4,2,3],[4,2,1],[4,3,1],[4,2],[4,1],[4,3]$  
For the 2<sup>nd</sup> horse the subsets are-  $[4,2,3,1],[4,2,3],[4,2,1],[2,3,1],[2,4],[2,1],[2,3]$ 
 For the 3<sup>rd</sup> horse the subsets are-  $[4,2,3,1],[4,2,3],[3,2,1],[4,3,1],[3,2],[3,1],[4,3]$ 
 For the 4<sup>th</sup> horse the subsets are-  $[1,2,3],[4,2,1],[4,3,1],[1,2],[4,1],[1,3]$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>