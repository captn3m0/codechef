---
{"category_name":"easy","problem_code":"MATCHS","problem_name":"Matches","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mishaprigara","problem_tester":null,"date_added":"18-04-2019","tags":{"0":"mishaprigara"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/MATCHS.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/MATCHS.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/MATCHS.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/MATCHS.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/MATCHS.pdf) as well.

Ari and Rich are playing a pretty confusing game. Here are the rules of the game:
- The game is played with two piles of matches. Initially, the first pile contains $N$ matches and the second one contains $M$ matches.
- The players alternate turns; Ari plays first.
- On each turn, the current player must choose one pile and remove a positive number of matches (not exceeding the current number of matches on that pile) from it.
- It is only allowed to remove $X$ matches from a pile if the number of matches in the **other** pile divides $X$.
- The player that takes the last match from any pile wins.

It can be proved that as long as both piles are non-empty, there is always at least one valid move, so the game must end by emptying some pile. Both Ari and Rich play optimally. Determine the winner of the game.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing the string `"Ari"` (without quotes) if Ari wins or `"Rich"` (without quotes) if Rich wins.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N, M \le 10^{18}$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, M \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
5
1 1
2 2
1 3
155 47
6 4
```

### Example Output
```
Ari
Ari
Ari
Ari
Rich
```
### Explanation
One possible sequence of moves for the fourth test case is:
$(155, 47) \rightarrow (61, 47) \rightarrow (14, 47) \rightarrow (14, 19) \rightarrow (14, 5) \rightarrow (4, 5) \rightarrow (4, 1) \rightarrow (0, 1)$

