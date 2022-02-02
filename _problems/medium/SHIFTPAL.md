---
{"category_name":"medium","problem_code":"SHIFTPAL","problem_name":"Shifted Palindrome","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-05-2018","tags":{"0":"easy","1":"hashing","2":"kingofnumbers","3":"kingofnumbers","4":"ltime60","5":"string","6":"xellos0"},"editorial_url":"https://discuss.codechef.com/problems/SHIFTPAL","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/SHIFTPAL.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/SHIFTPAL.pdf">Vietnamese</a> as well.</h3>

You are given a string $S$. A cyclic shift of $S$ is a string formed by moving a number of characters from the beginning of $S$ to its end (in the same order). Formally, for an integer $k$ ($0 \le k \lt N$), the $k$-th cyclic shift is a string $R$ with length $N$ such that:
- $R_i = S_{i+k}$ for each $1 \le i \le N-k$
- $R_i = S_{i-N+k}$ for each $N-k+1 \le i \le N$

A string is palindromic if it is equal to its own reverse string.

Compute the number of palindromic cyclic shifts of the given string.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer — the number of palindromic shifts.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le |S| \le 2\cdot 10^5$
- $|S|$ contains only lowercase English letters
- the sum of $|S|$ in all test cases does not exceed $2\cdot 10^5$

### Subtasks
**Subtask #1 (20 points):** the sum of $|S|$ in all test cases does not exceed $100$

**Subtask #2 (20 points):** the sum of $|S|$ in all test cases does not exceed $5,000$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
aabb
```

### Example Output
```
2
```
	
### Explanation
**Example case 1:** The two palindromic cyclic shifts of "aabb" are "abba" and "baab".
