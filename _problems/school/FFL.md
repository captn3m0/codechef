---
{"category_name":"school","problem_code":"FFL","problem_name":"Chef in Fantasy League","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 90\r\n3 8 6 5\r\n0 1 1 0\r\n4 90\r\n5 7 6 5\r\n0 1 1 0","output":"yes\r\nno","explanation":"**Example case 1:** If Chef buys the $1$-st and $3$-rd player, the total price of his team is $90 + 9 = 99$, which is perfectly fine. There is no other valid way to pick two players.\r\n\r\n**Example case 2:** Chef cannot buy two players in such a way that all conditions are satisfied.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/SPBg0H_EXME","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"s_h_shahin","problem_tester":"","date_added":"22-04-2020","tags":{"0":"cakewalk","1":"greedy","2":"ltime83","3":"s_h_shahin","4":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FFL","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FFL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/FFL.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/FFL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/FFL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/FFL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/FFL.pdf) as well.

Chef is going to start playing Fantasy Football League (FFL) this season. In FFL, each team consists of exactly $15$ players: $2$ *goalkeepers*, $5$ *defenders*, $5$ *midfielders* and $3$ *forwards*. Chef has already bought $13$ players; he is only missing one defender and one forward.

There are $N$ available players (numbered $1$ through $N$). For each valid $i$, the $i$-th player is either a defender or a forward and has a price $P_i$. The sum of prices of all players in a team must not exceed $100$ dollars and the players Chef bought already cost him $S$ dollars.

Can you help Chef determine if he can complete the team by buying one defender and one forward in such a way that he does not exceed the total price limit?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $S$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- The last line contains $N$ space-separated integers. For each valid $i$, the $i$-th of these integers is $0$ if the $i$-th player is a defender or $1$ if the $i$-th player is a forward.

### Output
For each test case, print a single line containing the string `"yes"` if it is possible to build a complete team or `"no"` otherwise (without quotes).

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $13 \le S \le 100$
- $1 \le P_i \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4 90
3 8 6 5
0 1 1 0
4 90
5 7 6 5
0 1 1 0
```

### Example Output
```
yes
no
```

### Explanation
**Example case 1:** If Chef buys the $1$-st and $3$-rd player, the total price of his team is $90 + 9 = 99$, which is perfectly fine. There is no other valid way to pick two players.

**Example case 2:** Chef cannot buy two players in such a way that all conditions are satisfied.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>