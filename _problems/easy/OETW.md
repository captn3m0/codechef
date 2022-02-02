---
{"category_name":"easy","problem_code":"OETW","problem_name":"OneTwo","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dolabmoon","problem_tester":null,"date_added":"18-09-2018","tags":{"0":"cook98","1":"dolabmoon","2":"easy","3":"observations","4":"prefix","5":"taran_1407"},"time":{"view_start_date":1537727402,"submit_start_date":1537727402,"visible_start_date":1537727402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/COOK98/bengali/OETW.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/COOK98/mandarin/OETW.pdf) , [Russian](http://www.codechef.com/download/translated/COOK98/russian/OETW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK98/vietnamese/OETW.pdf) as well.

For her birthday, Rima got an integer sequence $A_1, A_2, \dots, A_N$. Each element of this sequence is either 1 or 2.

Let's call an integer $s$ ($1 \le s \le 2N$) a *summary integer* if there is a contiguous subsequence of $A$ such that the sum of its elements is equal to $s$.

Rima wants to count all the summary integers. Can you help her?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of summary integers.

### Constraints 
- $1 \le T \le 5$
- $1 \le N \le 2 \cdot 10^6$
- $1 \le A_i \le 2$ for each valid $i$

### Example Input
```
1
3
2 1 2
```

### Example Output
```
4
```
