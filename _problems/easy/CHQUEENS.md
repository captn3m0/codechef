---
{"category_name":"easy","problem_code":"CHQUEENS","problem_name":"Chef and Two Queens","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"3-11-2018","tags":{"0":"counting","1":"easy","2":"implementation","3":"mgch","4":"snckpe19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHQUEENS","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/CHQUEENS.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/CHQUEENS.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/CHQUEENS.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/CHQUEENS.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/CHQUEENS.pdf) as well.

Chef got in the trouble! He is the king of Chefland and Chessland. There is one queen in Chefland and one queen in Chessland and they both want a relationship with him. Chef is standing before a difficult choice...

Chessland may be considered a chessboard with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Let's denote a unit square in row $r$ and column $c$ by $(r, c)$. Chef lives at square $(X, Y)$ of this chessboard.

Currently, both queens are living in Chessland too. Each queen, when alone on the chessboard, can see all squares that lie on the same row, column or diagonal as itself. A queen from $(x_q, y_q)$ cannot see a square $(r, c)$ if the square $(X, Y)$ is strictly between them. Of course, if the queens can see each other, the kingdom will soon be in chaos!

Help Chef calculate the number of possible configurations of the queens such that the kingdom will not be in chaos. A configuration is an unordered pair of distinct squares $(x_{q1}, y_{q1})$ and $(x_{q2}, y_{q2})$ such that neither of them is the square $(X, Y)$. Two configurations are different if the position of queen $1$ is different or the position of queen $2$ is different.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $M$, $X$ and $Y$. 

### Output
For each test case, print a single line containing one integer — the number of configurations such that the kingdom will not be in chaos.

### Constraints 
- $1 \le T \le 1000$
- $1 \le X \le N \le 10^2$
- $1 \le Y \le M \le 10^2$
- $2 \le N, M$

### Example Input
```
2
3 3 2 2
4 4 2 3
```

### Example Output
```
24
94
```

### Explanation
**Example case 1:** Half of these configurations are:
- $(1, 1), (3, 3)$
- $(1, 1), (2, 3)$
- $(1, 1), (3, 2)$
- $(1, 2), (3, 3)$
- $(1, 2), (3, 2)$
- $(1, 2), (3, 1)$
- $(1, 3), (3, 1)$
- $(1, 3), (3, 2)$
- $(1, 3), (2, 1)$
- $(2, 1), (2, 3)$
- $(2, 1), (1, 3)$
- $(2, 1), (3, 3)$
