---
{"category_name":"medium","problem_code":"MFSS","problem_name":"Maximum Frequent Subarray Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"upobir","problem_tester":"iscsi","date_added":"31-05-2021","tags":{"0":"june21","1":"medium","2":"segment","3":"suffix","4":"upobir"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/MFSS","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MFSS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/MFSS.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/MFSS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/MFSS.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/MFSS.pdf) as well. 

Akash has just learned the <i>maximum subarray sum</i> problem. And while thinking about the solution, he came up with a new problem, the <i>maximum frequent subarray sum</i> problem.

In this problem, you will be given an array $A$ of $N$ integers. You have to choose a non-empty subarray with the maximum possible score. The score of a subarray is calculated as 
$$\mathrm{score}(l, r) = (A_l+\cdots+A_r) \cdot (\mathrm{occurrences})$$
 Here, $\mathrm{occurrences}$ is the number of occurrences of that subarray in $A$.

Now Akash can't solve this problem, so please help him solve it.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The first line of each test case contains an integer $n$, the size of the array.
- The second line contains $n$ integers $A_1,\ldots, A_N$.

###Output
For each test case, output the maximum possible score in a new line.

###Constraints 
- $1 \leq T \leq 2 \cdot 10^5$
- $1 \leq n \leq 10^5$
- $-10^7 \leq A_i \leq 10^7$
- The sum of $n$ over all test cases $\leq 3 \cdot 10^5 $

###Subtasks
- **Subtask 1 (10 points):** $1 \leq n \leq 100 $, the sum of $n$ over all test cases $\leq 300$
- **Subtask 2 (15 points):** $1 \leq n \leq 1000 $, the sum of $n$ over all test cases $\leq 3000$
- **Subtask 3 (75 points):** original constraints

###Sample Input
```
2
6
10 8 -20 5 5 5 
10
-5 1 7 -1 2 -4 10 0 -11 3
```

###Sample Output
```
20
15
```
	
###Explanation
In the first test case, the maximum score is attained by subarray $[5, 5]$, its score is $(5+5) \cdot 2 = 20$ since it occurs twice in $A$.

In the second test case, the maximum score is attained by both subarrays $[1, 7, -1, 2, -4, 10]$ and $[1, 7, -1, 2, -4, 10, 0]$. Both have sum $15$ and occur once, so their scores are $15 \cdot 1 = 15 $.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>