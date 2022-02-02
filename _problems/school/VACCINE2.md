---
{"category_name":"school","problem_code":"VACCINE2","problem_name":"Vaccine Distribution","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n10 1\r\n10 20 30 40 50 60 90 80 100 1\r\n5 2\r\n9 80 27 72 79","output":"10\r\n3","explanation":"**Example case 1:** We do not need to worry about how the people are grouped, since only one person can be vaccinated in a single day. We require as many days as there are people.\r\n\r\n**Example case 2:** There are two people at risk and three people who are not at risk. One optimal strategy is to vaccinate the two people at risk on day $1$ and the remaining three on the next $2$ days.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/8qiFV_TjMVo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"3-12-2020","tags":{"0":"cakewalk","1":"ceiling","2":"daanish_adm","3":"dec20"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VACCINE2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VACCINE2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/VACCINE2.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/VACCINE2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/VACCINE2.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/VACCINE2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/VACCINE2.pdf) as well.

Finally, a COVID vaccine is out on the market and the Chefland government has asked you to form a plan to distribute it to the public as soon as possible. There are a total of $N$ people with ages $a_1, a_2, \ldots, a_N$.

There is only one hospital where vaccination is done and it is only possible to vaccinate up to $D$ people per day. Anyone whose age is $\ge 80$ or $\le 9$ is considered to be *at risk*. On each day, you may not vaccinate both a person who is at risk and a person who is not at risk. Find the smallest number of days needed to vaccinate everyone.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $D$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the smallest required number of days.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^4$
- $1 \le D \le 10^5$
- $1 \le a_i \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
10 1
10 20 30 40 50 60 90 80 100 1
5 2
9 80 27 72 79
``` 

### Example Output
```
10
3
```

### Explanation
**Example case 1:** We do not need to worry about how the people are grouped, since only one person can be vaccinated in a single day. We require as many days as there are people.

**Example case 2:** There are two people at risk and three people who are not at risk. One optimal strategy is to vaccinate the two people at risk on day $1$ and the remaining three on the next $2$ days.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>