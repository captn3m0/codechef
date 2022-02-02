---
{"category_name":"easy","problem_code":"OPTSET","problem_name":"Optimal Xor Set","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"3-06-2021","tags":{"0":"daanish_adm","1":"easy","2":"june21"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/OPTSET","time":{"view_start_date":1623663000,"submit_start_date":1623663000,"visible_start_date":1623663000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=OPTSET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Vietnamese](https://www.codechef.com/download/translated/JUNE21/vietnamese/OPTSET.pdf),
[Bengali](https://www.codechef.com/download/translated/JUNE21/bengali/OPTSET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE21/mandarin/OPTSET.pdf), and [Russian](https://www.codechef.com/download/translated/JUNE21/russian/OPTSET.pdf) as well. 

Find $K$ distinct numbers in the range $[1, N]$ such that the bitwise XOR of all the numbers is maximized. Print **any** set of these numbers that maximize the XOR.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, two integers $N$, $K$. 

###Output
For each test case, output $K$ distinct integers in any order as described in the problem.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq K \leq N \leq 10^6$
- The sum of $N$ over all queries is at most $4\cdot 10^6$.
- The sum of $K$ over all queries is at most $2\cdot 10^6$.

###Subtasks
**Subtask #1 (5 points):**
- $1 \leq T \leq 50$
- $1 \leq K \leq N \leq 20$

**Subtask #2 (20 points):**
- $1 \leq T \leq 50$
- $1 \leq K \leq N \leq 200$
- The sum of $N$ over all queries is at most $800$.
- The sum of $K$ over all queries is at most $400$.

**Subtask #3 (75 points):** original constraints

###Sample Input
```
3
10 1
9 2
8 7
```

###Sample Output
```
10
7 8
1 2 3 4 5 6 8
```
	
###Explanation
**Test Case $1$:** The only possible set is $\{10\}$ which gives the value $10$.

**Test Case $2$:** The other possible set is $\{9, 6\}$ which gives the value $9 \oplus 6 = 15 = 7 \oplus 8$.

**Test Case $3$:** The only possible set is $\{1, 2, 3, 4, 5, 6, 8\}$ which gives the value $1 \oplus 2 \oplus 3 \oplus 4 \oplus 5 \oplus 6 \oplus 8 = 15$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>