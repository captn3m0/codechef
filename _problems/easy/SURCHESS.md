---
{"category_name":"easy","problem_code":"SURCHESS","problem_name":"Chef and Surprise Chessboard","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"izaron","problem_tester":null,"date_added":"16-09-2018","tags":{"0":"easy","1":"izaron","2":"oct18","3":"prefix"},"editorial_url":"https://discuss.codechef.com/problems/SURCHESS","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/SURCHESS.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/SURCHESS.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/SURCHESS.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/SURCHESS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/SURCHESS.pdf) as well.


Chef loves to play chess, so he bought a new chessboard with width $M$ and height $N$ recently.

Chef considers a chessboard *correct* if its width (number of columns) is equal to its height (number of rows) and each cell has no side-adjacent cell of the same color (this is the so-called "chess order" which you can see in real-world chessboards). Chef's chessboard does not have to be a correct chessboard (in particular, it may have $N \neq M$).

A *sub-board* of Chef's chessboard is a rectangular piece of this board with an arbitrarily chosen top left and bottom right cell (possibly equal to the original chessboard). Every sub-board is also a chessboard.

Chef can invert some cells; inverting a cell means changing its color from white to black or from black to white. After inverting those cells, he wants to cut the maximum correct sub-board out of the original chessboard.

Chef has not yet decided how many cells he would like to invert. Now he wonders about the answers to $Q$ question. In the $i$-th question ($1 \le i \le Q$), he is allowed to invert at most $c_i$ cells (possibly zero); he would like to know the side length of the largest possible correct sub-board of his chessboard. Help Chef answer these questions.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a string with length $M$ describing the $i$-th row of Chef's chessboard. Each character of this string is either '0', representing a black cell, or '1', representing a white cell.
- The next line contains a single integer $Q$.
- The last line contains $Q$ space-separated integers $c_1, c_2, \dots, c_Q$.

### Output
For each question, print a single line containing one integer — the maximum size of a correct sub-board.

### Constraints 
- $1 \le N, M \le 200$
- $1 \le Q \le 10^5$
- $0 \le c_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le N, M \le 20$
- $1 \le Q \le 100$

**Subtask #2 (30 points):** $1 \le N, M \le 20$

**Subtask #3 (50 points):** original constraints

### Example Input
```
8 8
00101010
00010101
10101010
01010101
10101010
01010101
10101010
01010101
4
1 2 0 1001
```

### Example Output
```
7
8
6
8
```

### Explanation
If we don't change the board, the best answer here is the 6x6 bottom right sub-board. We can invert cells $(2, 2)$ and $(1, 1)$ to get a better answer.
