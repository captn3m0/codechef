---
{"category_name":"hard","problem_code":"PPARTS","problem_name":"Perfect Partitions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"7 6\r\n1 3\r\n2 2\r\n3 2\r\n3 1\r\n5 1\r\n6 1","output":"1 2 4 4 7 9 10","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":null,"date_added":"15-05-2020","tags":{"0":"fast","1":"gainullinildar","2":"generating","3":"june20","4":"maths","5":"medium","6":"polynomial","7":"rajarshi_basu"},"problem_difficulty_level":"Medium-Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/PPARTS","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PPARTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/PPARTS.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/PPARTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/PPARTS.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/PPARTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/PPARTS.pdf) as well.

In your house, you have a lot of integers. These integers are coloured by $Q$ colours (numbered $1$ through $Q$). For each valid $i$, you have $b_i$ integers with colour $i$ and each of these integers has value $a_i$.

For each integer $i$ such that $1 \le i \le N$, you need to find the number of different partitions of $i$. Here, a partition of $i$ consists of one or more integers from your house such that the sum of values of these integers is equal to $i$. Two partitions are different if there is a colour such that the number of integers with this colour in one partition is different from the number of integers with this colour in the other partition. Since these numbers could be very big, compute them modulo $998,244,353$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contain two space-separated integers $a_i$ and $b_i$.

### Output
Print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of partitions of $i$, modulo $998,244,353$.

### Constraints
- $1 \le N, Q \le 150,000$
- $1 \le a_i, b_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N, Q \le 300$

**Subtask #2 (10 points):** $N, Q \le 5,000$

**Subtask #3 (80 points):** original constraints

### Example Input
```
7 6
1 3
2 2
3 2
3 1
5 1
6 1
```

### Example Output
```
1 2 4 4 7 9 10
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>