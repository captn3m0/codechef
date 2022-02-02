---
{"category_name":"school","problem_code":"AVG","problem_name":"Average Number","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"22-02-2019","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime69"},"editorial_url":"https://discuss.codechef.com/problems/AVG","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/AVG.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/AVG.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/AVG.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/AVG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/AVG.pdf) as well.

Chef had a sequence of positive integers with length $N + K$. He managed to calculate the arithmetic average of all elements of this sequence (let's denote it by $V$), but then, his little brother deleted $K$ elements from it. All deleted elements had the same value.

Chef still knows the remaining $N$ elements — a sequence $A_1, A_2, \ldots, A_N$. Help him with restoring the original sequence by finding the value of the deleted elements or deciding that there is some mistake and the described scenario is impossible.

Note that the if it is possible for the deleted elements to have the same value, then it can be proven that it is unique. Also note that this value must be a positive integer.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $V$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the value of the deleted elements, or $-1$ if there is a mistake.

### Constraints 
- $1 \le T \le 100$
- $1 \le N, K \le 100$
- $1 \le V \le 10^5$
- $1 \le A_i \le 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
3 3 4
2 7 3
3 1 4
7 6 5
3 3 4
2 8 3
```

### Example Output
```
4
-1
-1
```
