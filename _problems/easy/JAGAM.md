---
{"category_name":"easy","problem_code":"JAGAM","problem_name":"Mix Mix Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"24-08-2018","tags":{"0":"ad","1":"allllekssssa","2":"game","3":"ltime63"},"editorial_url":"https://discuss.codechef.com/problems/JAGAM","time":{"view_start_date":1535216402,"submit_start_date":1535216402,"visible_start_date":1535216402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a 
href="http://www.codechef.com/download/translated/LTIME63/mandarin/JAGAM.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME63/russian/JAGAM.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME63/vietnamese/JAGAM.pdf" target="_blank">Vietnamese</a> as well.</h3>

Vanja and Miksi really like games. After playing one game for a long time, they decided to invent another game!

In this game, they have a sequence $A_1, A_2, \dots, A_N$ and two numbers $Z_1$ and $Z_2$. The rules of the game are as follows:
- The players take turns alternately, starting with Vanja.
- There is an integer $S$; at the beginning, $S = 0$.
- In each turn, the current player must choose an arbitrary element of $A$ and either add that number to $S$ or subtract it from $S$. Each element can be selected multiple times.
- Afterwards, if $S = Z_1$ or $S = Z_2$, the current player (the player who made $S$ equal to $Z_1$ or $Z_2$) is the winner of the game.
- If the game lasts for $10^{10}$ turns, Vanja and Miksi decide to declare it a tie.

Can you help the boys determine the winner of the game? Please note that the game can end in a tie (if nobody can make $S = Z_1$ or $S = Z_2$ in the first $10^{10}$ moves).

Both players play optimally, i.e. if there is a move which guarantees the current player's victory regardless of the other player's moves, the current player will make such a move. If the current player cannot win and there is a move which guarantees that the game will end in a tie, the current player will make such a move.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $Z_1$ and $Z_2$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
- For each test case, print a single line containing one integer — the final result of the game:
    - $1$ if Vanja (the first player) has a winning strategy
    - $2$ if Miksi (the second player) has a winning strategy
    - $0$ if the game ends in a tie
 
### Constraints
- $1 \le T \le 50$
- $1 \le N \le 50$
- $|Z_1|, |Z_2| \le 10^9$
- $|A_i| \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (25 points):** $N = 2$

**Subtask #2 (75 points):** original constraints

### Example Input
```
3
2 6 4
-4 10
1 1 -1
2
2 0 7
3 4
```

### Example Output
```
1
0
2
```

### Explanation
**Example case 1:** The first player can choose the value $A_1 = -4$, subtract it from $S = 0$ and obtain $S = - (-4) = 4 = Z_2$. The winner is the first player.  

**Example case 2:** It can be proven that neither player is able to reach $S = Z_1$ or $S = Z_2$. The result is a tie.
