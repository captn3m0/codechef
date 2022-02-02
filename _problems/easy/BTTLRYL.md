---
{"category_name":"easy","problem_code":"BTTLRYL","problem_name":"Battle Royale","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nadeemsk4347","problem_tester":"","date_added":"18-06-2021","tags":{"0":"cook130","1":"dynamic","2":"easy","3":"nadeemsk4347","4":"probability"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/BTTLRYL","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BTTLRYL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/BTTLRYL.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/BTTLRYL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/BTTLRYL.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/BTTLRYL.pdf) as well.

Chef invented a new game named Quick Battle Royale. $N$ people play the game. One or more rounds are played until all players except one are eliminated. In each round:
- Let there be $x$ non-eliminated players at the start of the round. Let's number them $1$ through $x$.
- First, each of these players chooses an integer between $1$ and $x$ inclusive. For each valid $i$, let's denote the integer chosen by the $i$-th player by $p_i$. In addition, each player is not allowed to choose $p_i = i$. Under these conditions, all players choose uniformly randomly and independently.
- Then, the elimination process starts. For each $i$ from $1$ to $x$, in this order:
    - if the player $i$ is currently still in the game, the player $p_i$ is eliminated from the game immediately
    - if the player $i$ was already eliminated from the game in this round, nothing happens

Note that it is impossible for all players to be eliminated and in each round, at least one player is eliminated.

For example, a game for $N = 4$ could look like this:
- Round 1: The players choose $p_1 = 3$, $p_2 = 4$, $p_3 = 2$, $p_4 = 2$. For $i = 1$, since player $1$ is still in the game, player $p_i = 3$ is eliminated. For $i = 2$, since player $2$ is also in the game, player $p_i = 4$ is eliminated. Since the players $3$ and $4$ are eliminated, nothing more happens.
- Round 2: Two players remain. The only choice they have is $p_1 = 2$ and $p_2 = 1$. For $i = 1$, since player $1$ is still in the game, player $p_i = 2$ gets eliminated. For $i = 2$, player $2$ is eliminated, so nothing happens.

Now there is one player left, so the game ends. It lasted $2$ rounds.

You have to find the expected value of the number of rounds the game will last. It can be shown that the expected number of rounds can be written as a fraction $\frac{p}{q}$, where $p$ and $q$ are positive integers and $q$ is coprime with $10^9+7$. You have to compute $p \cdot q^{-1}$ modulo $10^9 + 7$, where $q^{-1}$ is the multiplicative inverse of $q$ modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$ denoting the number of players at the start of the game.

### Output
For each test case, print a single line containing one integer $p \cdot q^{-1}$ modulo $10^9 + 7$.

### Constraints
- $1 \leq T \leq 100$
- $2 \leq N \leq 100$

### Example Input
```
5
1
2
3
4
5
```

### Example Output
```
0
1
500000005
944444453
616319451
```

### Explanation
**Example case 3:** The answer is $\frac{3}{2}$ modulo $(10^9 + 7)$. The following cases can happen in the first round (with equal probabilities):
    - $p = [2, 1, 1]$, game lasts $1$ round
    - $p = [2, 1, 2]$, game lasts $2$ rounds
    - $p = [2, 3, 1]$, game lasts $1$ round 
    - $p = [2, 3, 2]$, game lasts $2$ rounds
    - $p = [3, 1, 1]$, game lasts $1$ round
    - $p = [3, 1, 2]$, game lasts $1$ round
    - $p = [3, 3, 1]$, game lasts $2$ rounds
    - $p = [3, 3, 2]$, game lasts $2$ rounds

**Example case 4:** The answer is $\frac{35}{18}$ modulo $(10^9 + 7)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>