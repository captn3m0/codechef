---
{"category_name":"school","problem_code":"ADMIT","problem_name":"College Admissions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2\r\n2 1\r\n1 2\r\n2 1 2\r\n2 1 2\r\n1 2\r\n1\r\n2 1\r\n1 1\r\n1 1\r\n2 1\r\n1 2\r\n1\r\n2 2 1","output":"2\r\n0\r\n1","explanation":"**Case 1:** Here since Chef has the highest rank, he gets to choose the highest rank college in his preference list first, that is college with $id = 2$.\r\n\r\n**Case 2:** Here since there is only $1$ college and Chef stood second, he won\u0027t be able to apply to any of the colleges this year, so we print $id = 0$.\r\n\r\n**Case 3:** Here since Chef is the only student and thus has the highest rank, he gets to choose the highest rank college in his preference list first, that is college with $id = 1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/yS8D865VHfA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"12-02-2021","tags":{"0":"daanish_adm","1":"easy","2":"implementation","3":"start1","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADMIT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADMIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/ADMIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/ADMIT.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/ADMIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/ADMIT.pdf) as well.

College admissions are starting and Chef has also recently completed his high school. There are $N$ colleges, numbered from $1$ to $N$, and they are ranked from $1$ to $N$. Each college has only a single seat left. To apply for the colleges, every student has to give a common exam, the result of which decides their destiny, i.e, the student having best rank (scoring max marks) gets to choose the college of their preference first. 

Each student has a list of colleges that they like. They will want to get to the best-ranked college from their list. If they can't get into it, they will want to get into the second-ranked college from among their list, and so on.

If the single vacant seat of a college gets filled, the admission for that year is closed in that college. Then, the people who have applied for that college have to look for a lower-ranked college in their preference list provided that it still has vacancies.

Given information about $M$ students, about their marks scored in the exam (given as ranks) and the id’s of the college they are applying for, find which college Chef will land into given that he is the student with $id = 1$.

Every student tries to get into the highest-ranked college on his list which has a vacancy and if not possible to get into any of the colleges on his list, he won’t join any college this year.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains $M + 3$ lines of input.
- First line contains $2$ space separated integers $N$, $M$, the total number of colleges, and total number of students respectively.
- Second line contain $N$ distinct space separated integers $R_i$, rank of the $i^{th}$ college. Here $1$ denotes a higher rank and $N$ denotes a lower rank.
- Third line contains $M$ distinct space separated integers $S_i$, the rank of the $i^{th}$ student in the exam. Here $1$ denotes a higher rank, i.e, maximum marks scored and $M$ denotes a lower rank, i.e, minimum marks scored.
- Next $M$ lines contain $K + 1$ space separated integers which the first integer $K$ is the number of colleges $i^{th}$ student will apply to and the next $K$ integers describe the same.

###Output:
For each testcase, output in a single line the college in which Chef applies and $0$ if he won't be joining any college this year.

###Constraints 
- $1 \leq N, M \leq 5*10^4$
- $R$ is the permutation of integers from $[1, N]$
- $S$ is the permutation of integers from $[1, M]$
- Sum of $N$ over all tests is atmost $3* 10^5$
- Sum of $M$ over all tests is atmost $3.5 * 10^5$
- Sum of $K$ over all students over all tests is atmost $1.5*10^6$
- Every student applies to atleast $1$ college and all the applied colleges are different.

**Note:** Language multiplier for $Java$ is $3$ and for $python$ is $5$ and its recommended to use **Fast Input-Output** for this problem.

###Sample Input:
```
3
2 2
2 1
1 2
2 1 2
2 1 2
1 2
1
2 1
1 1
1 1
2 1
1 2
1
2 2 1
```

###Sample Output:
```
2
0
1
```

###Explanation:
**Case 1:** Here since Chef has the highest rank, he gets to choose the highest rank college in his preference list first, that is college with $id = 2$.

**Case 2:** Here since there is only $1$ college and Chef stood second, he won't be able to apply to any of the colleges this year, so we print $id = 0$.

**Case 3:** Here since Chef is the only student and thus has the highest rank, he gets to choose the highest rank college in his preference list first, that is college with $id = 1$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>