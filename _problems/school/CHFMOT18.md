---
{"category_name":"school","problem_code":"CHFMOT18","problem_name":"Chef and Demonetisation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n2 2\r\n1 14\r\n30 10\r\n31 4","output":"1\r\n1\r\n3\r\n9","explanation":"**Example case 1:** One coin with value $2$ is sufficient.\r\n\r\n**Example case 2:** We need to use one coin with value $1$.\r\n\r\n**Example case 3:** We need $3$ coins, each with value $10$.\r\n\r\n**Example case 4:** We can use seven coins with value $4$, one coin with value $2$ and one coin with value $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/U0bIJD7CkSk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dean_student","problem_tester":"","date_added":"21-06-2020","tags":{"0":"dean_student","1":"ltime85","2":"math","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFMOT18","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFMOT18","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/CHFMOT18.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/CHFMOT18.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/CHFMOT18.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/CHFMOT18.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/CHFMOT18.pdf) as well.

In a country called Chef Land, there was a lot of monetary fraud, so Chefu, the head of the country, decided to choose new denominations of the local currency ― all even-valued coins up to an integer $N$ should exist. After a few days, a citizen complained that there was no way to create an odd value, so Chefu decided that he should also introduce coins with value $1$. Formally, you are given an integer $N$; for $v = 1$ and each even positive integer $v \le N$, coins with value $v$ exist.

You are also given an integer $S$. To handle transactions quickly, find the minimum number of coins needed to pay a price $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $S$ and $N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of coins.

### Constraints
- $1 \le T \le 10,000$
- $1 \le S \le 10^9$
- $2 \le N \le 10^9$
- $N$ is even

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
4
2 2
1 14
30 10
31 4
```

### Example Output
```
1
1
3
9
```

### Explanation
**Example case 1:** One coin with value $2$ is sufficient.

**Example case 2:** We need to use one coin with value $1$.

**Example case 3:** We need $3$ coins, each with value $10$.

**Example case 4:** We can use seven coins with value $4$, one coin with value $2$ and one coin with value $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>