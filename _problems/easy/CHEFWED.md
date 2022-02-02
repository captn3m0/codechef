---
{"category_name":"easy","problem_code":"CHEFWED","problem_name":"Chef and Wedding Arrangements","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 1\r\n5 1 3 3 3\r\n5 14\r\n1 4 2 4 4\r\n5 2\r\n3 5 4 5 1","output":"3\r\n17\r\n4","explanation":"**Example case 1:** The optimal solution is to use three tables with groups of guests $[1, 2, 3]$, $[4]$ and $[5]$. None of the tables have any guests that are likely to get into an argument, so the inefficiency is $3 \\cdot K = 3$.\r\n\r\n**Example case 2:** The optimal solution is to seat all guests at one table. Then, guests $2$, $4$ and $5$ are likely to get into an argument with each other, so the inefficiency is $K + 3 = 17$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/p3cqLlL8unk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"4-08-2020","tags":{"0":"aryanag_adm","1":"aryanag_adm","2":"aug20","3":"daniel_1999","4":"dynamic","5":"easy","6":"rishup_nitdgp"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CHEFWED","time":{"view_start_date":1597656600,"submit_start_date":1597656600,"visible_start_date":1597656600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFWED","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/CHEFWED.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/CHEFWED.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/CHEFWED.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/CHEFWED.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/CHEFWED.pdf).

There are $N$ guests (numbered $1$ through $N$) coming to Chef's wedding. Each guest is part of a family; for each valid $i$, the $i$-th guest is part of family $F_i$. You need to help Chef find an optimal seating arrangement.

Chef may buy a number of tables, which are large enough for any number of guests, but the people sitting at each table must have consecutive numbers ― for any two guests $i$ and $j$ ($i \lt j$) sitting at the same table, guests $i+1, i+2, \ldots, j-1$ must also sit at that table. Chef would have liked to seat all guests at a single table; however, he noticed that two guests $i$ and $j$ are likely to get into an argument if $F_i = F_j$ and they are sitting at the same table.

Each table costs $K$ rupees. Chef defines the *inefficiency* of a seating arrangement as the total cost of tables plus the number of guests who are likely to get into an argument with another guest. Tell Chef the minimum possible inefficiency which he can achieve.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.

### Output
For each test case, print a single line containing one integer ― the smallest possible inefficiency.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 1,000$
- $1 \le K \le 1,000$
- $1 \le F_i \le 100$ for each valid $i$
- The sum of $N$ across test cases is $\leq 5,000$
### Subtasks
- **Subtask #1 (20 points):** $K = 1$
- **Subtask #2 (80 points):** original constraints

### Example Input
```
3
5 1
5 1 3 3 3
5 14
1 4 2 4 4
5 2
3 5 4 5 1
```

### Example Output
```
3
17
4
```

### Explanation
**Example case 1:** The optimal solution is to use three tables with groups of guests $[1, 2, 3]$, $[4]$ and $[5]$. None of the tables have any guests that are likely to get into an argument, so the inefficiency is $3 \cdot K = 3$.

**Example case 2:** The optimal solution is to seat all guests at one table. Then, guests $2$, $4$ and $5$ are likely to get into an argument with each other, so the inefficiency is $K + 3 = 17$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>