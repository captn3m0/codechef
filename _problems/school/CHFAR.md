---
{"category_name":"school","problem_code":"CHFAR","problem_name":"Chef and Sequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"27-10-2018","tags":{"0":"math","1":"mgch","2":"simple","3":"snck1b19","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHFAR","time":{"view_start_date":1540827000,"submit_start_date":1540827000,"visible_start_date":1540827000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S191BTST/russian/CHFAR.pdf) , [Vietnamese](http://www.codechef.com/download/translated/S191BTST/vietnamese/CHFAR.pdf) , [Hindi](http://www.codechef.com/download/translated/S191BTST/hindi/CHFAR.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191BTST/mandarin/CHFAR.pdf) and [Bengali](http://www.codechef.com/download/translated/S191BTST/bengali/CHFAR.pdf) as well.

Chef has a sequence of positive integers $A_1, A_2, \dots, A_N$. He has only one question for you: is it possible to change at most $K$ elements of this sequence to arbitrary positive integers in such a way that the condition
$$A_1^2 + A_2^2 + \dots + A_N^2 \le A_1 + A_2 + \dots + A_N$$
holds?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to satisfy the given condition or `"NO"` otherwise.

###Constraints 
- $1 \le T \le 1,000$
- $1 \le K \le N \le 10^4$
- $1 \le A_i \le 10$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
2 2
1 2
```

### Example Output
```
YES
```

### Explanation
**Example case 1:** It is possible to change $A_2$ to $1$. This gives $A = [1, 1]$, for which the given condition holds, so the answer is `"YES"`.
