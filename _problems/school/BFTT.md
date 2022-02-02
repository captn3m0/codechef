---
{"category_name":"school","problem_code":"BFTT","problem_name":"Balsa For The Three","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"16-08-2018","tags":{"0":"allllekssssa","1":"bruteforce","2":"cook","3":"cook97","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/BFTT","time":{"view_start_date":1534703400,"submit_start_date":1534703400,"visible_start_date":1534703400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK97/mandarin/BFTT.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/COOK97/russian/BFTT.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK97/vietnamese/BFTT.pdf" target="_blank">Vietnamese</a> as well.</h3>

It's well known that our friend Balsa likes the digit $3$ very much. He's so obsessed with this digit that he spends time thinking about it even during holidays.

Today, Balsa invented an interesting problem: For a positive integer $N$, find the smallest integer greater than $N$ such that its decimal representation contains the digit $3$ at least three times.
 
You are given the integer $N$. Please solve this problem for Balsa.

### Input 
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer — the smallest number greater than $N$ containing the digit $3$ at least three times.

### Constraints
- $1 \le T \le 40$
- $1 \le N \le 2 \cdot 10^9$

### Example Input
```
3
221
333
3002
```

### Example Output
```
333
1333
3033
```
