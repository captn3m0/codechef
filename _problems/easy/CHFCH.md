---
{"category_name":"easy","problem_code":"CHFCH","problem_name":"Chef Challenge","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"22-02-2019","tags":{"0":"greedy","1":"kingofnumbers","2":"ltime69","3":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/CHFCH","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/CHFCH.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/CHFCH.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/CHFCH.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/CHFCH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/CHFCH.pdf) as well.

Chef's brother Chefu is a competitive programmer. Every day, he practices for ICPC (International Chefs' Programming Contest) by solving problems. Today, Chef challenged his brother to solve a certain problem, promising to bake an apple pie for him if he succeeds. Chefu has successfully solved the problem, but can you solve it? 

You are given an integer sequence $A_1, A_2, \ldots, A_N$. In one move, you must select two adjacent elements of this sequence (i.e. $A_i$ and $A_{i+1}$ for some valid $i$) and swap them. Let's call a sequence *orderly* if it contains a **contiguous** subsequence with length at least $K$ such that all of its elements have identical values. Find the minimum number of moves required to make the given sequence orderly or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of moves, or $-1$ if it is impossible to make the sequence orderly.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le K \le N \le 300,000$
- $1 \le A_i \le 300,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 100$
- the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
8 3
1 2 2 1 3 3 2 1
5 3
1 1 2 2 3
```

### Example Output
```
3
-1
```
