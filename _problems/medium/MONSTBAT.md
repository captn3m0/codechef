---
{"category_name":"medium","problem_code":"MONSTBAT","problem_name":"Monsters Battle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n5 4 60\r\nAAA\r\n2 15 16\r\nDAA","output":38,"explanation":"**Example case 1:** Chef attacks Chefina\u0027s first monster with his second monster. On the next turn, Chefina decides to end the game.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"28-02-2020","tags":{"0":"admin3","1":"easy","2":"game","3":"ltime81","4":"recursion","5":"tmwilliamlin"},"problem_difficulty_level":"Easy-Medium","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/MONSTBAT","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MONSTBAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/MONSTBAT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/MONSTBAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/MONSTBAT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/MONSTBAT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/MONSTBAT.pdf) as well.

Chef and Chefina are playing a game.

Chef has $N$ monsters (numbered $1$ through $N$). For each valid $i$, the $i$-th monster has a value $V_{1,i}$ and it is either in attack mode or defense mode. The initial states of the monsters are described by a string $D_1$: for each valid $i$, the $i$-th monster is in attack mode if the $i$-th character of $D_1$ is 'A' or in defense mode if the $i$-th character is 'D'.

Chefina has $M$ monsters (numbered $1$ through $M$). Their values are $V_{2,1}, V_{2,2}, \ldots, V_{2,M}$ and their initial states are described by a string $D_2$ in the same way.

In the game, the players alternate turns; Chef plays first. During each turn, the current player may either end the game immediately or do the following: choose one of their own living monsters in attack mode, choose a monster of the other player in defense mode, attack and kill this defending monster and change the attacking monster to defense mode. Note that once a monster is in defense mode, it never changes to attack mode.

Each player is trying to maximise the difference $X-Y$, where $X$ is the sum of values of this player's living monsters (in both modes, but only if they are alive) and $Y$ is the sum of values of the opponent's living monsters. Assuming that both players are playing optimally, calculate the sum of values of Chef's living monsters minus the sum of values of Chefina's living monsters after the game ends.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $V_{1,1}, V_{1,2}, \ldots, V_{1,N}$.
- The third line contains a single string $D_1$ with length $N$.
- The fourth line contains $M$ space-separated integers $V_{2,1}, V_{2,2}, \ldots, V_{2,M}$.
- The fifth line contains a single string $D_2$ with length $M$.

### Output
For each test case, print a single line containing one integer ― the sum of values of Chef's living monsters minus the sum of values of Chefina's living monsters after the game ends.

### Constraints
- $1 \le T \le 100$
- $1 \le N, M \le 10^5$
- initially, Chefina has at least one monster in defense mode
- $D_1$ and $D_2$ contain only characters 'A' and 'D'
- $1 \le V_{i,j} \le 10^9$ for each valid $i, j$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N, M \le 10^3$
- initially, Chefina has exactly one monster in defense mode and Chef has no monsters in defense mode
- the sum of $N$ over all test cases does not exceed $10^4$
- the sum of $M$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3 3
5 4 60
AAA
2 15 16
DAA
```

### Example Output
```
38
```

### Explanation
**Example case 1:** Chef attacks Chefina's first monster with his second monster. On the next turn, Chefina decides to end the game.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>