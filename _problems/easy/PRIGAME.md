---
{"category_name":"easy","problem_code":"PRIGAME","problem_name":"Prime Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 2\r\n3 1\r\n2021 42","output":"Chef\r\nDivyam \r\nDivyam","explanation":"**Example case 1:** Since $D = 1$ is divisible by $0$ primes, Chef will write $0$ and win the game in the first move.\r\n\r\n**Example case 2:** Chef must choose $D$ between $1$ and $5$ inclusive, since $D = 6$ is divisible by more than one prime. Then, Divyam can always choose $6-D$, write $0$ on the board and win the game.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/vp6DJ62gvGg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"div5252","problem_tester":"","date_added":"13-01-2021","tags":{"0":"div5252","1":"easy","2":"feb21","3":"game","4":"number"},"problem_difficulty_level":"Easy-Medium","best_tag":"Game Theory","editorial_url":"https://discuss.codechef.com/problems/PRIGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRIGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/PRIGAME.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/PRIGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/PRIGAME.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/PRIGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/PRIGAME.pdf) as well.

Chef and Divyam are playing a game with the following rules:
- First, an integer $X!$ is written on a board.
- Chef and Divyam alternate turns; Chef plays first.
- In each move, the current player should choose a positive integer $D$ which is divisible by up to $Y$ distinct primes and does not exceed the integer currently written on the board. Note that $1$ is not a prime.
- $D$ is then subtracted from the integer on the board, i.e. if the integer written on the board before this move was $A$, it is erased and replaced by $A-D$.
- When one player writes $0$ on the board, the game ends and this player wins.

Given $X$ and $Y$, determine the winner of the game.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $X$ and $Y$.

### Output
For each test case, print a single line containing the string `"Chef"` if Chef wins the game or `"Divyam"` if Divyam wins (without quotes).

### Constraints
- $1 \leq T \leq 10^6$
- $1 \leq X,Y \leq 10^6$

### Subtasks
**Subtask #1 (5 points):** $Y=1$

**Subtask #2 (10 points):**
- $1 \leq T \leq 10^2$
- $1 \leq X \leq 6$

**Subtask #3 (85 points):** original constraints

### Example Input
```
3
1 2
3 1
2021 42
```

### Example Output
```
Chef
Divyam 
Divyam
```

### Explanation
**Example case 1:** Since $D = 1$ is divisible by $0$ primes, Chef will write $0$ and win the game in the first move.

**Example case 2:** Chef must choose $D$ between $1$ and $5$ inclusive, since $D = 6$ is divisible by more than one prime. Then, Divyam can always choose $6-D$, write $0$ on the board and win the game.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>