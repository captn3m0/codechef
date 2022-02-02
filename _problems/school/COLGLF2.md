---
{"category_name":"school","problem_code":"COLGLF2","problem_name":"College Life 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/eWC1YtBeX1I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"18-01-2021","tags":{"0":"daanish_adm","1":"simple","2":"start1","3":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COLGLF2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLGLF2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/COLGLF2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/COLGLF2.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/COLGLF2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/COLGLF2.pdf) as well.

Chef has just started watching Game of Thrones, and he wants to first calculate the exact time (in minutes) that it'll take him to complete the series.

The series has $S$ seasons, and the $i^{th}$ season has $E_i$ episodes, each of which are $L_{i,1}, L_{i,2}, \ldots, L_{i,E_i}$ minutes long. Note that these $L_{i,j}$ include the duration of the beginning intro song in each episode. The streaming service that he uses, allows Chef to skip the intro song. The intro song changes slightly each season, and so he wants to watch the intro song in the first episode of each season, but he'll skip it in all other episodes of that season (yes, we know, a sacrilege!). You know that the intro song lasts for $Q_i$ minutes in the $i^{th}$ season.

Find the total time in minutes, that he has to watch.

###Input:

- First line will contain a single integer, $T$, denoting the number of testcases. Then the testcases follow. 
- The first line of each testcase will contain a single integer $S$, denoting the total number of seasons.
- The second line contains $S$ space separated integers, $Q_1, Q_2, \ldots, Q_S$, where $Q_i$ denotes the duration of the intro song in the $i^{th}$ season.
- The $i^{th}$ of the next $S$ lines contains $E_i + 1$ space separated integers, where the first integer is $E_i$, denoting the number of episodes in the $i^{th}$ season. That is followed by the duration of each of the $E_i$ episodes, $L_{i,1}, L_{i,2}, \ldots, L_{i,E_i}$. 

###Output:
For each testcase, output the answer in a single line.

###Constraints 
- $1 \leq T \leq 5$
- $1 \leq S \leq 10^5$
- $2 \leq L_{i,j} \leq 10^5$
- $1 \leq E_i$
- Sum of all $E_i$ in a single testcase is at most $10^5$
- $1 \leq Q_i \lt L_{i,j}$, for all valid $j$.

###Sample Input 1:
```
1
2
1 2
1 2
2 3 4
```

###Sample Output 1:
```
7
```

###Explanation:

**1** in the beginning denotes there is only $1$ test case.

**Testcase 1:**

There are $2$ seasons. The intro song in each of the first season episodes lasts for $1$ minute, and the intro song in the second season episodes lasts for $2$ minutes each.

For the first season, since there is only $1$ episode, Chef will be watching it completely - $2$ minutes.

For the second season, Chef will be watching the first episode completely ($3$ minutes) and will skip the intro song of the second episode ($4 - 2 = 2$ minutes).

So, the total time spent is $2 + (3 + (4 - 2)) = 7$ minutes.

###Sample Input 2:
```
2
1
10
5 11 11 11 11 11
5
10 10 10 10 10
1 11
1 11
1 11
1 11
1 11
```

###Sample Output 2:
```
15
55
```

###Explanation:

**2** in the beginning denotes there are $2$ test cases.

**Testcase 1:**

There is only $1$ season having intro song for $10$ minutes. 

Chef will have to watch the entire first episode including the intro song and will be skipping the same in further seasons.

So, the total time spent is $(11 + (11 - 10) * 4) = 15$ minutes.

**Testcase 2:**

There are total $5$ seasons. The intro song in every season lasts for $10$ minutes.

For each of the five seasons, since there is only $1$ episode, Chef will be watching all of them completely - $11$ minutes each.

So, the total time spent is $11 * 5 = 55$ minutes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>