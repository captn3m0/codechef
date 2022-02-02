---
{"category_name":"easy","problem_code":"ADAPWNS","problem_name":"Ada Pawns","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"16-10-2018","tags":{"0":"alei","1":"game","2":"grundy","3":"observations","4":"sprague"},"editorial_url":"https://discuss.codechef.com/problems/ADAPWNS","time":{"view_start_date":1548009002,"submit_start_date":1548009002,"visible_start_date":1548009002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK102/hindi/ADAPWNS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK102/mandarin/ADAPWNS.pdf), [Russian](http://www.codechef.com/download/translated/COOK102/russian/ADAPWNS.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK102/vietnamese/ADAPWNS.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK102/bengali/ADAPWNS.pdf) as well.

Ada is playing pawn chess with Suzumo.

Pawn chess is played on a long board with $N$ squares in one row. Initially, some of the squares contain pawns.

Note that the colours of the squares and pawns do not matter in this game, but otherwise, the standard chess rules apply:
- no two pawns can occupy the same square at the same time
- a pawn cannot jump over another pawn (they are no knights!), i.e. if there is a pawn at square $i$, then it can only be moved to square $i-2$ if squares $i-1$ and $i-2$ are empty
- pawns cannot move outside of the board (outs are forbidden)

The players alternate turns; as usual, Ada plays first. In each turn, the current player must choose a pawn and move it either one or two squares to the left of its current position. The player that cannot make a move loses.

Can Ada always beat Suzumo? Remember that Ada is a chess grandmaster, so she always plays optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ with length $N$ describing the initial board from left to right. An empty square and a square containing a pawn are denoted by the characters '.' and 'P' respectively.

### Output
For each test case, print a single line containing the string `"Yes"` if Ada wins the game or `"No"` otherwise (without quotes).

### Constraints 
- $1 \le T \le 500$
- $2 \le N \le 128$
- $S$ contains only characters '.' and 'P'

### Example Input
```
1
..P.P
```

### Example Output
```
Yes
```

### Explanation
**Example case 1:** Ada can move the first pawn two squares to the left; the board after this move looks like
```
P...P
```
and now, Suzumo can only move the second pawn. If he moves it one square to the left, Ada will move it two squares to the left on her next move, and if he moves it two squares to the left, Ada will move it one square to the left, so the board after Ada's next move will look like
```
PP...
```
and Suzumo cannot make any move here.
