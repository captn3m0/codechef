---
{"category_name":"school","problem_code":"ADAKNG","problem_name":"Ada King","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"13-01-2019","tags":{"0":"alei","1":"bfs","2":"cakewalk","3":"conditionals","4":"greedy","5":"looping"},"editorial_url":"https://discuss.codechef.com/problems/ADAKNG","time":{"view_start_date":1548009002,"submit_start_date":1548009002,"visible_start_date":1548009002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK102/hindi/ADAKNG.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK102/mandarin/ADAKNG.pdf), [Russian](http://www.codechef.com/download/translated/COOK102/russian/ADAKNG.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAKNG.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK102/bengali/ADAKNG.pdf) as well.

Chef Ada is training to defend her title of World Chess Champion.

To train her calculation skills, Ada placed a <a >king</a> on a chessboard. Remember that a chessboard has $8$ rows and $8$ columns (for the purposes of this problem, both the rows and the columns are numbered $1$ through $8$); let's denote the square in row $r$ and column $c$ by $(r, c)$. A king on a square $(r, c)$ can move to another square $(r', c')$ if and only if $(r'-r)^2+(c'-c)^2 \le 2$.

Ada placed her king on the square $(R, C)$. Now, she is counting the number of squares that can be visited (reached) by the king in at most $K$ moves. Help Ada verify her answers.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $R$, $C$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of squares the king can visit.

### Constraints 
- $1 \le T \le 512$
- $1 \le R, C, K \le 8$

### Example Input
```
1
1 3 1
```

### Example Output
```
6
```
	
### Explanation
**Example case 1:** The king can stay on its original square or move to one of the squares circled in the following figure.

![](https://codechef_shared.s3.amazonaws.com/download/Images/CK102TST/ADAKNG/ADAKNG.png)
