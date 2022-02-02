---
{"category_name":"medium","problem_code":"ADASHOP","problem_name":"Ada Bishop","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"18-10-2018","tags":{"0":"ad","1":"alei","2":"cases","3":"cook99","4":"counting","5":"easy","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/ADASHOP","time":{"view_start_date":1540146602,"submit_start_date":1540146602,"visible_start_date":1540146602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK99/hindi/ADASHOP.pdf), [Spanish](http://www.codechef.com/download/translated/COOK99/spanish/ADASHOP.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/COOK99/mandarin/ADASHOP.pdf), [Russian](http://www.codechef.com/download/translated/COOK99/russian/ADASHOP.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK99/vietnamese/ADASHOP.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK99/bengali/ADASHOP.pdf) as well.


Ada has the biggest chessboard in ChefLand. It has $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$), where $M \ge 2N$. As training for her upcoming world chess championship match, she placed one bishop at row $r$ and column $c$ of her board. The remaining squares of the board are empty. Now, she is calculating the number of squares that can be reached by the bishop in at most $K$ moves. Help Ada verify her answers.

Remember that in one move, a <a href="https://en.wikipedia.org/wiki/Bishop_(chess)">bishop</a> at row $r$ and column $c$ can move to another square at row $r'$ and column $c'$ if and only if either $r+c=r'+c'$ or $r-c=r'-c'$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $N$, $M$, $r$, $c$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of reachable squares.

### Constraints 
- $1 \le T \le 5 \cdot 10^5$
- $1 \le N, K \le 10^9$
- $2N \le M \le 10^9$
- $1 \le r \le N$
- $1 \le c \le M$

### Example Input
```
1
3 7 1 1 2
```

### Example Output
```
7
```

### Explanation
<img src="https://codechef_shared.s3.amazonaws.com/download/CK99TST/ADASHOP/ADASHOP.png "></img>
