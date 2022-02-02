---
{"category_name":"school","problem_code":"ADADISH","problem_name":"Ada and Dishes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n2 2 2\r\n3\r\n1 2 3\r\n4\r\n2 3 4 5","output":"4\r\n3\r\n7","explanation":"**Example case 1:** Place the first two dishes on the burners, wait for two minutes, remove both dishes and prepare the last one on one burner.\r\n\r\n**Example case 2:** Place the first and third dish on the burners. When the first dish is prepared, remove it and put the second dish on the same burner.\r\n\r\n**Example case 3:** Place the third and fourth dish on the burners. When the third dish is prepared, remove it and put the second dish on the same burner. Similarly, replace the fourth dish (when it is prepared) by the first dish on the other burner.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/hNbI-95muvA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"6-10-2020","tags":{"0":"alei","1":"brute","2":"cakewalk","3":"nov20"},"problem_difficulty_level":"Cakewalk","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/ADADISH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADADISH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/ADADISH.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/ADADISH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/ADADISH.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/ADADISH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/ADADISH.pdf) as well.

Chef Ada is preparing $N$ dishes (numbered $1$ through $N$). For each valid $i$, it takes $C_i$ minutes to prepare the $i$-th dish. The dishes can be prepared in any order.

Ada has a kitchen with two identical burners. For each valid $i$, to prepare the $i$-th dish, she puts it on one of the burners and after $C_i$ minutes, removes it from this burner; the dish may not be removed from the burner before those $C_i$ minutes pass, because otherwise it cools down and gets spoiled. Any two dishes may be prepared simultaneously, however, no two dishes may be on the same burner at the same time. Ada may remove a dish from a burner and put another dish on the same burner at the same time.

What is the minimum time needed to prepare all dishes, i.e. reach the state where all dishes are prepared?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of minutes needed to prepare all dishes.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 4$
- $1 \le C_i \le 5$ for each valid $i$

### Subtasks
**Subtask #1 (1 points):** $C_1 = C_2 = \ldots = C_N$

**Subtask #2 (99 points):** original constraints

### Example Input
```
3
3
2 2 2
3
1 2 3
4
2 3 4 5
```

### Example Output
```
4
3
7
```

### Explanation
**Example case 1:** Place the first two dishes on the burners, wait for two minutes, remove both dishes and prepare the last one on one burner.

**Example case 2:** Place the first and third dish on the burners. When the first dish is prepared, remove it and put the second dish on the same burner.

**Example case 3:** Place the third and fourth dish on the burners. When the third dish is prepared, remove it and put the second dish on the same burner. Similarly, replace the fourth dish (when it is prepared) by the first dish on the other burner.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>