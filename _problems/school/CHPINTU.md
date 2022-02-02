---
{"category_name":"school","problem_code":"CHPINTU","problem_name":"Pintu and Fruits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6 4\r\n1 2 3 3 2 2\r\n7 3 9 1 1 1","output":5,"explanation":"**Example case 1:**\r\n- The sum of all baskets with fruits of type $1$ is $7$.\r\n- The sum of all baskets with fruits of type $2$ is $5$.\r\n- The sum of all baskets with fruits of type $3$ is $10$.\r\n- The sum of all baskets with fruits of type $4$ is $0$ because there are no such baskets.\r\n\r\nChef can only choose fruits of type $1$, $2$ or $3$. Therefore, the minimum price he has to pay is $5$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/lOmkwt-J1hg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"euler_euler","problem_tester":"","date_added":"28-01-2020","tags":{"0":"ad","1":"cakewalk","2":"euler_euler","3":"march20","4":"tmwilliamlin"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CHPINTU","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHPINTU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/CHPINTU.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/CHPINTU.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/CHPINTU.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/CHPINTU.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/CHPINTU.pdf) as well.

Chef went to Australia and saw the destruction caused by bushfires, which made him sad, so he decided to help the animals by feeding them fruits. First, he went to purchase fruits from Pintu.

Pintu sells $M$ different types of fruits (numbered $1$ through $M$). He sells them in $N$ baskets (numbered $1$ through $N$), where for each valid $i$, the $i$-th basket costs $P_i$ and it contains fruits of type $F_i$. Chef does not have too much money, so he cannot afford to buy everything; instead, he wants to choose one of the $M$ available types and purchase all the baskets containing fruits of that type.

Help Chef choose the type of fruit to buy such that he buys at least one basket and the total cost of the baskets he buys is the smallest possible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.
- The third line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer ― the minimum price Chef must pay.

### Constraints
- $1 \le T \le 1,000$
- $1 \le M, N \le 50$
- $1 \le F_i \le M$ for each valid $i$
- $0 \le P_i \le 50$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $M = 2$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
6 4
1 2 3 3 2 2
7 3 9 1 1 1
```

### Example Output
```
5
```

### Explanation
**Example case 1:**
- The sum of all baskets with fruits of type $1$ is $7$.
- The sum of all baskets with fruits of type $2$ is $5$.
- The sum of all baskets with fruits of type $3$ is $10$.
- The sum of all baskets with fruits of type $4$ is $0$ because there are no such baskets.

Chef can only choose fruits of type $1$, $2$ or $3$. Therefore, the minimum price he has to pay is $5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>