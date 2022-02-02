---
{"category_name":"medium","problem_code":"DOTIT","problem_name":"Dot It","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dolabmoon","problem_tester":null,"date_added":"20-09-2018","tags":{"0":"cook98","1":"dolabmoon","2":"fft","3":"medium","4":"sqrt","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/DOTIT","time":{"view_start_date":1537727402,"submit_start_date":1537727402,"visible_start_date":1537727402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/COOK98/bengali/DOTIT.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/COOK98/mandarin/DOTIT.pdf) , [Russian](http://www.codechef.com/download/translated/COOK98/russian/DOTIT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK98/vietnamese/DOTIT.pdf) as well.

There are two sequences $A_1, A_2, \dots, A_N$ and $B_1, B_2, \dots, B_N$. Answer $Q$ queries on these sequences.

In each query, you should calculate the dot product of subsequences $A_x, A_{x+1}, \dots, A_{x+l-1}$ and $B_y, B_{y+1}, \dots, B_{y+l-1}$, i.e. the value of the expression
$$\sum_{k=0}^{l-1} A_{x+k} B_{y+k} \,.$$

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \dots, B_N$.
- Each of the following $Q$ lines contains three space-separated integers $x$, $y$ and $l$ describing one query.

### Output
For each query, print a single line containing one integer — the answer to the query (the dot product).

### Constraints 
- $1 \le T \le 30,000$
- $1 \le N, Q \le 10^5$
- $1 \le A_i, B_i \le 10^4$ for each valid $i$
- the sum of $N$ for all test cases does not exceed $10^5$
- the sum of $Q$ for all test cases does not exceed $10^5$

### Example Input
```
1
5 2
4 6 5 2 7
3 2 4 6 3
2 4 2
1 1 1
```

### Example Output
```
51
12
```
