---
{"category_name":"easy","problem_code":"CNTFAIL","problem_name":"Magic School","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bipin2","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"bipin2"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>It's year 2018 and it's Christmas time! Before going for vacations, students of Hogwarts School of Witchcraft and Wizardry had their end semester exams.

$N$ students attended the semester exam. Once the exam was over, their results were displayed as either "Pass" or "Fail" behind their magic jacket which they wore. A student cannot see his/her result but can see everyone else's results. Each of $N$ students count the number of passed students they can see.

Given the number of "Pass" verdicts that each of the $N$ students counted, we have to figure out conclusively, the number of students who failed, or report that there is some inconsistency or that we cannot be sure.

###Input:
- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each test case will contain $N$, representing the number of students who attended the exam.
- Next line contains  $N$ spaced integers representing the number of "Pass" counted by each of the $N$ students.

###Output:
- For each test case, output the answer in a single line. 
- If the counts reported by the students are not consistent with each other or if it's not possible to predict the number of failed students from the given input, then print -1.

###Constraints 
- $1 \leq T \leq 50$
- $1 \leq N \leq 10^{5}$
- $0 \leq$ Count given by each Student $\leq 10^{5}$

###Sample Input:
```
1
4
3 2 2 2
```

###Sample Output:
```
1
```

###EXPLANATION:
There are 4 students, and they counted the number of passed students as 3,2,2,2. The first student can see that all others have passed, and all other students can see only 2 students who have passed. Hence, the first student must have failed, and others have all passed. Hence, the answer is 1.