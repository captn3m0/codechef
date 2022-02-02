---
{"category_name":"easy","problem_code":"EOEO","problem_name":"The Tom and Jerry Game!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n11","output":"0\r\n5","explanation":"**Example case 1:** We must have $JS = TS = 1$, but in this case, the game ends and a tie is declared in the first turn.\r\n\r\n**Example case 2:** If $JS \\in \\{2, 4, 6, 8, 10\\}$, then $JS$ is even and $TS$ is odd, so Jerry wins the game in the first turn. Any odd value of $JS$ leads to a tie instead.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/rsNcv7Tr1Ok","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":"","date_added":"8-05-2020","tags":{"0":"easy","1":"june20","2":"math","3":"rajarshi_basu","4":"sahi1422","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EOEO","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EOEO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/EOEO.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/EOEO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/EOEO.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/EOEO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/EOEO.pdf) as well.

As usual, Tom and Jerry are fighting. Tom has strength $TS$ and Jerry has strength $JS$. You are given $TS$ and your task is to find the number of possible values of $JS$ such that Jerry wins the following game.

The game consists of one or more turns. In each turn:
- If both $TS$ and $JS$ are even, their values get divided by $2$ and the game proceeds with the next turn.
- If both $TS$ and $JS$ are odd, a tie is declared and the game ends.
- If $TS$ is even and $JS$ is odd, Tom wins the game.
- If $TS$ is odd and $JS$ is even, Jerry wins the game.

Find the number of possible initial values of $JS$ such that $1 \le JS \le TS$, there is no tie and Jerry wins the game.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $TS$.

### Output
For each test case, print a single line containing one integer ― the number of values of $JS$ such that Jerry wins the game.

### Constraints
- $1 \le T \le 10^5$
- $1 \le TS \le 10^{18}$

### Subtasks
**Subtask #1 (20 points):** $T, TS \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
1
11
```

### Example Output
```
0
5
```

### Explanation
**Example case 1:** We must have $JS = TS = 1$, but in this case, the game ends and a tie is declared in the first turn.

**Example case 2:** If $JS \in \{2, 4, 6, 8, 10\}$, then $JS$ is even and $TS$ is odd, so Jerry wins the game in the first turn. Any odd value of $JS$ leads to a tie instead.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>