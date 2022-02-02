---
{"category_name":"medium","problem_code":"ADAROKS","problem_name":"Ada Rooks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-01-2019","tags":{"0":"alei","1":"bitmasking","2":"data","3":"intervals","4":"sets"},"editorial_url":"https://discuss.codechef.com/problems/ADAROKS","time":{"view_start_date":1548009002,"submit_start_date":1548009002,"visible_start_date":1548009002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK102/hindi/ADAROKS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK102/mandarin/ADAROKS.pdf), [Russian](http://www.codechef.com/download/translated/COOK102/russian/ADAROKS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAROKS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK102/bengali/ADAROKS.pdf) as well.

After successfully defending her title of World Chess Champion, Ada noticed that she is lacking in rook endgames.

To improve her endgame skills, Ada placed $K$ kings on a chessboard with $N$ rows and $M$ columns, and now she is calculating the minimum number of rooks she must place on the board to satisfy the following conditions:
- No king is attacked by a rook.
- The kings are isolated, i.e. no king can reach another king without passing through a square attacked by a rook or capturing a rook.

Help Ada check her answers.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The next $N$ lines describe the chessboard. Each of these lines contains a string with length $M$ describing one row, where an empty square and a square containing a king are denoted by '.' and 'K' respectively.

### Output
For each test case, print a single line containing one integer ― the minimum required number of rooks, or $-1$ if it is impossible to place rooks in a way that satisfies all conditions.

### Constraints 
- $1 \le T \le 1,024$
- $1 \le N, M \le 1,024$
- each string contains only characters '.' and 'K'
- the sum of $N \cdot M$ over all test cases does not exceed $1,024$

### Example Input
```
1
8 8
........
........
..K.....
......K.
........
........
.K..K...
........
```

### Example Output
```
1
```

### Explanation
**Example case 1:** One possible position for the only necessary rook is depicted in the following image.

![ ](https://codechef_shared.s3.amazonaws.com/download/Images/CK102TST/ADAROKS/ADAROKS.png)
