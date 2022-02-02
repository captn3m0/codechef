---
{"category_name":"easy","problem_code":"CHEFPAT","problem_name":"Chef and Patients","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"30-12-2020","tags":{"0":"akash_adm","1":"ccrc2021","2":"easy","3":"sorting"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFPAT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFPAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/CHEFPAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/CHEFPAT.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/CHEFPAT.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/CHEFPAT.pdf) as well.

Dr. Chef is treating COVID-19 patients. There is a queue of $N$ patients (numbered from patient $1$ at the front of the queue to patient $N$ at the back) outside his clinic. You, his assistant, found out that for each valid $i$, the $i$-th patient has an *illness level* $A_i$.

Chef treats patients based on their health, i.e. a patient with a higher illness level is always treated before any patients with a lower illness level. Chef is also fair, so he treats patients with an equal illness level based on their position in the queue, i.e. a patient ahead in the queue is always treated before a patient with the same illness level that is further behind in the queue.

The first patient to be treated has to wait an hour for Chef to set up his equipment. Treating each patient also takes an hour, and Chef always starts treating the next patient as soon as he is done with the current one.

The patients are a bit impatient. As Chef's assistant, for each patient, find out how long (in hours) this patient needs to wait before Chef starts treating this patient.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the time the $i$-th patient needs to wait.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 10^5$
- $1 \le A_i \le 1,000$ for each valid $i$

### Example Input
```
4
5
2 3 5 3 4
3
2 2 2
6
2 10 3 3 2 10
4
8 9 8 9
```

### Example Output
```
5 3 1 4 2
1 2 3
5 1 3 4 6 2
3 1 4 2
```

### Explanation
**Example case 1:** Patient number $3$ has the highest illness level. Therefore, this patient just waits an hour for Chef to set up his equipment and gets treated immediately after. Patient number $5$ has the next highest illness level, so they go next. They need to wait an hour for patient $3$ to be treated. In total, patient $5$ has to wait $2$ hours. After that, both patients $2$ and $4$ have an equal illness level, but patient $2$ is ahead in the queue, so patient $2$ goes next, followed by patient $4$, and then finally patient $1$.

**Example case 2:** All three patients have the same illness level, so they are treated according to their position in the queue. Patient $1$ goes first, followed by patient $2$, and then patient $3$.

**Example case 3:** Patients at positions $2$ and $6$ in the queue have the highest illness level $10$. The patient at position $2$ is ahead in the queue, so this patient is treated first, and then the patient at position $6$ is treated. After this, the patients at positions $3$ and $4$ in the queue have the next highest illness level, so the patient at position $3$ is treated next, followed by the patient at position $4$. Similarly, afterwards, the patient at position $1$ is treated, and then the patient at position $5$ is treated.

**Example case 4:** Patients at positions $2$ and $4$ in the queue have the highest illness level $9$, so the patient at position $2$ is treated first, followed by the patient at position $4$, then the patient at position $1$ and finally the patient at position $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>