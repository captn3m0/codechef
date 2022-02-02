---
{"category_name":"medium","problem_code":"SRTGAME","problem_name":"Permutation Sorting Game","problemComponents":{"constraints":"- $1 \\leq T \\leq 1000$\n- $1 \\leq N \\leq 10^5$\n- $1 \\leq P_i \\leq N$\n- $1\\leq V_i \\leq 10^9$\n- $P_1, P_2, \\dots, P_N$ form a permutation of values from $1$ to $N$\n- $\\sum N$ over all test cases is at most $10^5$\n","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line contains $T$ - the number of test cases. Then the test cases follow.\n- The first line of each test case contains a single integer $N$ - the size of the permutation.\n- The next line contains $N$ space separated integers $P_1, P_2, \\dots, P_N$.\n- The next line contains $N$ space separated integers $V_1, V_2, \\dots, V_N$.\n","inputFormatState":true,"outputFormat":"For each test case:\n- Output on the first line the winner of the match, i.e. `Alice` or `Bob`. You may print each character of the string in uppercase or lowercase (for example, the strings `Alice`, `ALICE`, `alIcE` and `aLiCe` will all be treated as identical).\n- Output on the next line an integer $M$ - the minimum number of moves taken by the winner.\n- Then output $M$ lines, where the $i$-th line contains two integers denoting the $i$-th move by the winner.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"2\n10\n1 8 10 4 2 5 7 9 3 6\n2 1 2 1 2 1 1 1 1 2\n10\n6 2 9 1 7 8 10 5 3 4\n2 1 1 2 2 2 2 2 1 2","output":"Bob\n6\n2 8\n2 9\n2 3\n2 10\n2 6\n2 5\nALiCE\n7\n3 9\n1 4\n4 10\n10 7\n7 5\n5 8\n8 6","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anshugarg12","problem_tester":"","date_added":"22-10-2021","tags":{"0":"anshugarg12","1":"constructive","2":"cook134","3":"greedy","4":"implementation","5":"medium"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SRTGAME","time":{"view_start_date":1635100204,"submit_start_date":1635100204,"visible_start_date":1635100204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SRTGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/COOK134/mandarin/SRTGAME.pdf), [Bengali](https://www.codechef.com/download/translated/COOK134/bengali/SRTGAME.pdf), and [Russian](https://www.codechef.com/download/translated/COOK134/russian/SRTGAME.pdf) as well.

Alice and Bob have a permutation of size $N$, so they started playing a game on it. **They both have their own copies** of an initial permutation on which they perform moves in turns. Note that although Bob's and Alice's permutations are initially similar in values, **they are the not the same permutation**; any move Alice makes only changes her permutation and not Bob's, and vice versa.

Alice goes first. In one move, they can do the following on their respective permutations:

- Choose two indices $i$ and $j$ and swap $P_i$ and $P_j$.

The player who sorts their permutation first, wins the game.

Both players play optimally. But unfortunately, on playing a lot of games, Alice won all of those. Bob realized that something is unfair and told Alice to play with some handicap.

So they mutually agreed that, Alice is given an extra potential array $V$ of size $N$. Now Alice can do the following move only:

- Choose two indices $i$ and $j$ such that, $0 \lt V_i$ AND $0 \lt V_j$.
- If no such indices exist, skip her turn.
- Else swap $P_i$ and $P_j$ and then decrement $V_i$ and $V_j$ by $1$.

Bob plays as usual without any potential array. Alice goes first.

Report who wins if both play optimally, and find the strategy for the winner. You also need to determine the shortest sequence of moves to victory.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>