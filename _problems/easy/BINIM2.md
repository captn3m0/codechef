---
{"category_name":"easy","problem_code":"BINIM2","problem_name":"Binary Nim 2","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"31-08-2018","tags":{"0":"alei","1":"cook99","2":"game","3":"greedy","4":"nim","5":"simple","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/BINIM2","time":{"view_start_date":1540146602,"submit_start_date":1540146602,"visible_start_date":1540146602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK99/hindi/BINIM2.pdf), [Spanish](http://www.codechef.com/download/translated/COOK99/spanish/BINIM2.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/COOK99/mandarin/BINIM2.pdf), [Russian](http://www.codechef.com/download/translated/COOK99/russian/BINIM2.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK99/vietnamese/BINIM2.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK99/bengali/BINIM2.pdf) as well.


Tweedle-Dee and Tweedle-Dum are playing a fierce match of binary Nim. This novel game is played with $N$ stacks, each of them containing only $1$-s and $0$-s.

Just like in normal Nim, Tweedle-Dee and Tweedle-Dum alternate turns; in their turn, a player must choose one non-empty stack and remove a positive number of elements from the top of this stack. However, Tweedle-Dee may only choose a stack with $0$ at the top (and remove elements from it afterwards), and similarly, Tweedle-Dum may only choose a stack with $1$ at the top. The player that cannot make a move for the first time wins.

Ada does not want to wait for the end of the game, so she asked you to determine the winner of the game if you are given the starting player. Remember that Tweedle-Dee and Tweedle-Dum are legendary grandmasters of combinatorial games, so they both always play optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains an integer $N$, followed by a space and a string $S$ denoting the player that starts the game.
- Each of the following $N$ lines contains a single binary string $B$ representing a stack; the first character of $B$ corresponds to the top element of the stack and the last character to the bottom element.

### Output
For each test case, print a single line containing the string `"Dee"` if Tweedle-Dee wins the match or `"Dum"` if Tweedle-Dum wins.

### Constraints 
- $1 \le T \le 500$
- $1 \le N \le 50$
- $1 \le |B| \le 50$
- each character in $B$ is either '1' or '0'
- $S$ is either `"Dee"` or `"Dum"`

### Example Input
```
1
2 Dee
010
101
```

### Example Output
```
Dee
```
