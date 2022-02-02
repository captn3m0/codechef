---
{"category_name":"easy","problem_code":"NSA","problem_name":"No Strings Attached","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"anuj_2106","problem_tester":null,"date_added":"3-07-2018","tags":{"0":"anuj_2106","1":"easy","2":"july18"},"editorial_url":"https://discuss.codechef.com/problems/NSA","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/NSA.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/NSA.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/NSA.pdf">Vietnamese</a> as well.</h3>



You are given a string $S$ of lowercase English letters with length $N$. You are allowed to (but don't have to) choose one index in this string and change the letter at this index to any other lowercase English letter. The cost of this operation is the absolute value of the difference of ASCII values of the new letter and the original letter; let's denote it by $X$.

Next, consider the number of pairs of indices $(i, j)$ in the resulting string (the string after changing one letter, or the original string if no letter was changed) such that $1 \le i \lt j \le N$ and $S_i \lt S_j$. Let's denote it by $Y$.

Find the minimum possible value of $X+Y$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$. 

### Output
For each test case, print a single line containing one integer — the minimum value of $X+Y$.

### Constraints 
- $1 \le T \le 20$
- $1 \le N \le 10^5$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 50$

**Subtask #2 (20 points):** $1 \le N \le 250$

**Subtask #3 (70 points):** original constraints

### Example Input
```
3
abcd
dbca
dcba
```

### Example Output
```
6
1
0
```
