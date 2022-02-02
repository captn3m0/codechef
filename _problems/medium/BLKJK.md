---
{"category_name":"medium","problem_code":"BLKJK","problem_name":"Blackjack","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 4 5\r\n1 2 3\r\n3 3 4\r\n1 2 3\r\n2 20 30\r\n40 10","output":"1\r\n0\r\n-1","explanation":"**Example case 1:** We can swap the last card with one of the first two cards.\r\n\r\n**Example case 2:** No swaps are necessary, Chef wins after dealing the first two cards.\r\n\r\n**Example case 3:** The order of the cards in the deck does not matter, Chef cannot win.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/LiWY8ZY9_HQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"triplem5ds","problem_tester":"","date_added":"7-12-2020","tags":{"0":"bitset","1":"dynamic","2":"jan21","3":"knapsack","4":"medium","5":"triplem5ds"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/BLKJK","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BLKJK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/BLKJK.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/BLKJK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/BLKJK.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/BLKJK.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/BLKJK.pdf) as well.

Chef is playing a card game called Blackjack. He starts with a deck of $N$ cards (numbered $1$ through $N$), where for each valid $i$, the $i$-th card has an integer $A_i$ written on it. Then he starts dealing the cards one by one in the order from card $1$ to card $N$. Chef wins if at some moment in time, the sum of all the cards dealt so far is between $X$ and $Y$ inclusive; if this never happens, Chef loses.

We want Chef to win the game, so without him noticing, we will swap some pairs of cards (possibly none) before the game starts. Find the smallest number of swaps we need so that Chef would win the game, or determine that it is impossible to make Chef win.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $X$ and $Y$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the smallest required number of swaps or $-1$ if Chef cannot win.

### Constraints 
- $1 \leq T \leq 100$
- $1 \leq N,X,Y \leq 10^3$
- $X \leq Y$
- $1 \leq A_i \leq 10^3$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

### Subtasks
**Subtask #1 (22 points):** Chef can win if we make up to $2$ swaps

**Subtask #2 (34 points):**
- $1 \leq N,X,Y \leq 400$
- $1 \leq A_i \leq 400$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $4,000$

**Subtask #3 (44 points):** original constraints

### Example Input
```
3
3 4 5
1 2 3
3 3 4
1 2 3
2 20 30
40 10
```

### Example Output
```
1
0
-1
```

### Explanation
**Example case 1:** We can swap the last card with one of the first two cards.

**Example case 2:** No swaps are necessary, Chef wins after dealing the first two cards.

**Example case 3:** The order of the cards in the deck does not matter, Chef cannot win.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>