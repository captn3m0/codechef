---
{"category_name":"easy","problem_code":"DATE1","problem_name":"Dinner by Candlelight","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 1\r\n1 2 1\r\n2 2 1","output":"1\r\n2\r\n2","explanation":"**Example case 1:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the starting candle gets extinguished and the candle which we started lighting up at the time $0$ is lit, so we have only $1$ candle lit up when Chef\u0027s girlfriend arrives.\r\n\r\n**Example case 2:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the candle which we started lighting up at the time $0$ and the starting candle are both lit.\r\n\r\n**Example case 3:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the candle which we started lighting up at time $0$ is lit, and we start lighting up one more candle. At the time $2$, the starting candle gets extinguished and the candle which we started lighting up at the time $1$ is lit. In total, we have $2$ lit candles when Chef\u0027s girlfriend arrives.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/2th3BecGVj8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"12-03-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime94"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DATE1","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DATE1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/DATE1.pdf)

Chef is having a candlelit dinner with his girlfriend at his place. Currently, it is time $0$, Chef just managed to light a candle, but he is out of matchsticks.

Since Chef has an infinite supply of (unlit) candles, he can use the following strategy: each second (starting at time $0$), he takes one lit candle and lights up $X$ other candles using it. This process takes $1$ unit of time to complete, i.e. if Chef starts lighting up $X$ candles at a time $t_1$, he is able to finish at the time $t_1 + 1$.

However, since candle wax is limited, a candle can only burn for $Y$ units of time and then it is extinguished.

Chef's girlfriend arrives at a time $A$ — specifically, after all the candles that were supposed to get extinguished at time $A$ have been extinguished and after Chef lights up all the candles that he was lighting up since time $A-1$. Now Chef wants to know the maximum number of candles which can be lit at the time $A$ to impress his girlfriend.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $A$, $Y$ and $X$.

### Output
For each test case, print a single line containing one integer — the maximum number of lit candles Chef can impress his girlfriend with.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq A, Y, X \leq 10^9$

### Subtasks
**Subtask #1 (40 points):** $A \ge Y$

**Subtask #2 (60 points):** original constraints

### Example Input
```
3
1 1 1
1 2 1
2 2 1
```

### Example Output
```
1
2
2
```

### Explanation
**Example case 1:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the starting candle gets extinguished and the candle which we started lighting up at the time $0$ is lit, so we have only $1$ candle lit up when Chef's girlfriend arrives.

**Example case 2:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the candle which we started lighting up at the time $0$ and the starting candle are both lit.

**Example case 3:** At the time $0$, there is one lit candle, using which we light $1$ more candle. At the time $1$, the candle which we started lighting up at time $0$ is lit, and we start lighting up one more candle. At the time $2$, the starting candle gets extinguished and the candle which we started lighting up at the time $1$ is lit. In total, we have $2$ lit candles when Chef's girlfriend arrives.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>