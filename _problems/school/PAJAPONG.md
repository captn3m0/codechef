---
{"category_name":"school","problem_code":"PAJAPONG","problem_name":"Ping Paja Pong","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n1 3 3\n5 7 2\n38657 76322 564","output":"Paja\nChef\nPaja","explanation":"**Example case 1:** Chef served for the first three games, after that Paja started serving. He only served in one game, so he is supposed to serve next.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"21-06-2019","tags":{"0":"ltime73","1":"taran_1407","2":"thesitzr"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAJAPONG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/PAJAPONG.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/PAJAPONG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/PAJAPONG.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/PAJAPONG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/PAJAPONG.pdf) as well.

Chef and Paja are bored, so they are playing an infinite game of ping pong. The rules of the game are as follows:
- The players play an infinite number of games. At the end of each game, the player who won it scores a point.
- In each game, one of the players *serves*. Chef serves in the first game.
- After every $K$ points are scored (regardless of which players scored them), i.e. whenever $K$ games have been played since the last time the serving player changed, the player that serves in the subsequent games changes: if Chef served in the game that just finished, then Paja will serve in the next game and all subsequent games until the serving player changes again; if Paja served, then Chef will serve.

The players got a little too caught up in the game and they forgot who is supposed to serve in the next game. Will you help them determine that? So far, Chef has scored $X$ points and Paja has scored $Y$ points.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $X$, $Y$ and $K$.

### Output
For each test case, print a single line containing the string `"Chef"` if Chef is supposed to serve next or `"Paja"` otherwise (without quotes).

### Constraints
- $1 \le T \le 50$
- $0 \le X, Y \le 10^9$
- $1 \le K \le 10^9$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
1 3 3
5 7 2
38657 76322 564
```

### Example Output
```
Paja
Chef
Paja
```	
	
### Explanation
**Example case 1:** Chef served for the first three games, after that Paja started serving. He only served in one game, so he is supposed to serve next.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>