---
{"category_name":"school","problem_code":"BLITZ3_2","problem_name":"Chess Match","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/WZZ1-MVJ5vM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"17-06-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start5","3":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BLITZ3_2","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BLITZ3_2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/BLITZ3_2.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/BLITZ3_2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/BLITZ3_2.pdf) as well.

In a Chess match "a + b", each player has a clock which shows $a$ minutes at the start and whenever a player makes a move, $b$ seconds are added to this player's clock. Time on a player's clock decreases during that player's turns and remains unchanged during the other player's turns. If the time on some player's clock hits zero (but not only in this case), this player loses the game.

There's a 3 + 2 blitz chess match. After $N$ turns (i.e. $\left\lfloor \frac{N+1}{2} \right\rfloor$ moves made by white and $\left\lfloor \frac{N}{2} \right\rfloor$ moves made by black), the game ends and the clocks of the two players stop; they show that the players (white and black) have $A$ and $B$ seconds left respectively. Note that after the $N$-th turn, $b = 2$ seconds are still added to the clock of the player that made the last move and then the game ends.

Find the total duration of the game, i.e. the number of seconds that have elapsed from the start of the game until the end.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $A$ and $B$. 

### Output
For each test case, print a single line containing one integer — the duration of the game.

### Constraints
- $1 \leq T \leq 10^5$
- $10 \leq N \leq 100$
- $0 \leq A \leq 180 + 2 \cdot \left\lfloor \frac{N+1}{2} \right\rfloor$
- $0 \leq B \leq 180 + 2 \cdot \left\lfloor \frac{N}{2} \right\rfloor$
- for $N$ odd, $A \geq 2$
- for $N$ even, $B \geq 2$
- there is at least one valid game consistent with the input

### Example Input
```
3
10 0 2
11 2 1
12 192 192
```

### Example Output
```
378
379
0
```

### Explanation
**Example case 1:** The total time given to both clocks after $10$ turns is $2 \cdot (180 + 10) = 380$ seconds. The total time left at the end is $0 + 2 = 2$ seconds. The duration of the game is $380 - 2 = 378$ seconds.

**Example case 3:** The total time given to both clocks after $12$ turns is $2 \cdot (180 + 12) = 384$ seconds. The total time left at the end is $192 + 192 = 384$ seconds. The duration of the game is $384 - 384 = 0$ seconds.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>