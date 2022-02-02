---
{"category_name":"school","problem_code":"CHFICRM","problem_name":"Chef and Icecream","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n5 10\r\n2\r\n10 5\r\n2\r\n5 15","output":"YES\r\nNO\r\nNO","explanation":"**Example case 1:** The first person pays with a Rs. 5 coin. The second person pays with a Rs. 10 coin and Chef gives them back the Rs. 5 coin (which he got from the first person) as change.\r\n\r\n**Example case 2:** The first person already cannot buy an icecream because Chef cannot give them back Rs. 5.\r\n\r\n**Example case 3:** The first person pays with a Rs. 5 coin. The second person cannot buy the icecream because Chef has only one Rs. 5 coin, but he needs to give a total of Rs. 10 back as change.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YLLXhDZFUx4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"raja1999","problem_tester":"","date_added":"15-05-2020","tags":{"0":"cakewalk","1":"june20","2":"raja1999","3":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFICRM","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFICRM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/CHFICRM.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/CHFICRM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/CHFICRM.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/CHFICRM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/CHFICRM.pdf) as well.

Chef owns an icecream shop in Chefland named scoORZ. There are only three types of coins in Chefland: Rs. 5, Rs. 10 and Rs. 15. An icecream costs Rs. 5.

There are $N$ people (numbered $1$ through $N$) standing in a queue to buy icecream from scoORZ. Each person wants to buy exactly one icecream. For each valid $i$, the $i$-th person has one coin with value $a_i$. It is only possible for someone to buy an icecream when Chef can give them back their change exactly ― for example, if someone pays with a Rs. 10 coin, Chef needs to have a Rs. 5 coin that he gives to this person as change.

Initially, Chef has no money. He wants to know if he can sell icecream to everyone in the queue, in the given order. Since he is busy eating his own icecream, can you tell him if he can serve all these people?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing the string `"YES"` if all people can be served or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^3$
- $a_i \in \{5, 10, 15\}$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):** $a_i \in \{5, 10\}$ for each valid $i$

**Subtask #2 (60 points):** original constraints

### Example Input
```
3
2
5 10
2
10 5
2
5 15
```

### Example Output
```
YES
NO
NO
```

### Explanation
**Example case 1:** The first person pays with a Rs. 5 coin. The second person pays with a Rs. 10 coin and Chef gives them back the Rs. 5 coin (which he got from the first person) as change.

**Example case 2:** The first person already cannot buy an icecream because Chef cannot give them back Rs. 5.

**Example case 3:** The first person pays with a Rs. 5 coin. The second person cannot buy the icecream because Chef has only one Rs. 5 coin, but he needs to give a total of Rs. 10 back as change.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>