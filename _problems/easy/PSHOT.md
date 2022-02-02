---
{"category_name":"easy","problem_code":"PSHOT","problem_name":"Penalty Shoot-Out II","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n101011\r\n3\r\n100001","output":"4\r\n6","explanation":"**Example case 1:** After four shots, team $A$ has scored $2$ goals and team $B$ has scored $0$ goals. Whatever happens afterwards, team $A$ is guaranteed to win, since even if team $B$ scored their last (and only) goal and team $A$ did not score their last goal, team $A$ would still win by $1$ goal.\r\n\r\n**Example case 2:** Team $A$ scores the first goal and after that, neither team scores any goals until the last shot. Up till then, there is always a possibility that the match could end in a draw if team $B$ scored a goal with its last shot, or in the victory of team $A$ if it was a miss. We can only guarantee the result after the last shot.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/t0Nod81i4vg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jatinngpl_adm","problem_tester":"","date_added":"13-02-2020","tags":{"0":"akashbhalotia","1":"cakewalk","2":"cook115","3":"jatinngpl_adm","4":"observation"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PSHOT","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PSHOT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/PSHOT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/PSHOT.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/PSHOT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/PSHOT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/PSHOT.pdf) as well.

Teams $A$ and $B$ are having a penalty shoot-out to decide the winner of their football match. Each team gets to take a shot $N$ times, and the team with the higher number of scored goals at the end wins. If the number of goals scored during the shoot-out by each team turns out to be the same even after all $2N$ shots, then they stop and agree that the result is a draw.

The two teams take shots alternately — team $A$ shoots first, then team $B$ shoots, then team $A$ and so on until team $B$ takes its $N$-th shot (at which point each team has taken exactly $N$ shots). Even though all $2N$ shots are taken, the result of the shoot-out is often known earlier — e.g. if team $A$ has already scored $N-1$ goals and team $B$ has missed at least two shots, team $A$ is definitely the winner.

For each shot, you know whether it was a goal or a miss. You need to find the earliest moment when the winner is known — the smallest $s$ ($0 \le s \le 2N$) such that after $s$ shots, the result of the shoot-out (whether team $A$ won, team $B$ won or the match is drawn) would be known even if we did not know the results of the remaining $2N-s$ shots.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a string $S$ with length $2 \cdot N$, where for each valid $i$, the $i$-th character is '0' if the $i$-th shot was a miss or '1' if it was a goal.

### Output
For each test case, print a single line containing one integer — the smallest $s$ such that after $s$ shots, the result of the shoot-out is known.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $S$ contains only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
2
3
101011
3
100001
```

### Example Output
```
4
6
```

### Explanation
**Example case 1:** After four shots, team $A$ has scored $2$ goals and team $B$ has scored $0$ goals. Whatever happens afterwards, team $A$ is guaranteed to win, since even if team $B$ scored their last (and only) goal and team $A$ did not score their last goal, team $A$ would still win by $1$ goal.

**Example case 2:** Team $A$ scores the first goal and after that, neither team scores any goals until the last shot. Up till then, there is always a possibility that the match could end in a draw if team $B$ scored a goal with its last shot, or in the victory of team $A$ if it was a miss. We can only guarantee the result after the last shot.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>