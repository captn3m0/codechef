---
{"category_name":"medium","problem_code":"SPPSTR","problem_name":"Special power strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dj_r_1","problem_tester":"","date_added":"16-07-2020","tags":{"0":"dem2020","1":"dementia","2":"dj_r_1","3":"dynamic","4":"easy","5":"strings"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/SPPSTR","time":{"view_start_date":1597339800,"submit_start_date":1597339800,"visible_start_date":1597339800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SPPSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given two strings $A$ and $B$. The string $A$ consists of lowercase English alphabets and the string $B$ can consist of lowercase English alphabets as well as **special power** characters. There are three types of special power characters: **#**, **?** and **!**. Each of these special power characters are associated with a few lowercase English alphabets. You can either just remove the special power character from any position, or the special power character can be replaced with any string of your choice, but with the condition that the string must not include any character which is not among the characters associated with that special power character.

You have to tell the minimum number of distinct special power characters used to convert $B$ to $A$. If not possible print -1.

For eg. if the string $B$ is ab?f#z?d and ? is associated with asev and # is associated with abr. Then you can transform $B$ into ab**svva**f**rrr**z**e**d by replacing the **?** at position 3 by *svva*, replacing **#** at position 5 by *rrr* and replacing **?** at position 7 by *e*. Similarly, the string **B** can be transformed into abf**bbbaaba**z**eeeee**d by removing the **?** at position 3, replacing **#** at position 5 with *bbbaaba* and replacing **?** at position 7 by *eeeee*. The string **B** can also be converted into *abfzd* by removing all the three special power characters. There are infinite possible tranformation of the string **B**. Now, if $A$ is *abfbbazd*, then $B$ can be transfomed into $A$ by removing the **?** at position 3, replacing **#** with *bba* and removing the **?** at position 7. Therefore, we used only one distinct special power character i.e. **#**. You cannot tranform the string $B$ to $A$ using 0 distinct special power character, therefore the answer is 1.

###Input:
- The first line contains the $T$, the number of test cases.
- The first line of each testcase contains the string $A$.
- The second line of each testcase contains the string $B$.
- The next three lines of each testcase contain three strings, the associated lowercase English alphabets for **#**, **?** and **!** respectively.

###Output:
- Print in a single line the minimum  number of distinct special power characters used to convert $B$ to $A$. If not possible print -1.

###Constraints:
- $1 \le T \le 5$
- $1 \le$ length of $A, B \le 600$
- The associated characters with each **#**, **?** and **!** are distinct lowercase English alphabets.
i.e. $1 \le$ length of associated characters with **#**, **?** and **!** $\le 26$.

###Sample Input 1:
```
2
abfbbazd
ab?f#z?d
abr
asev
yhsc
bgghdffgzzz
b#!hd?#g!#z?
agezfh
flk
izogt
```

###Sample Output:
```
1
1
```
	
###Explanations:

**Testcase 1:** Already explained in the problem statement.

**Testcase 2:** There are more than one ways to convert the string $B$ to $A$. But to minimize the distinct number of special power characters used, we can replace the first **#** with *gg*, the second **#** with *ff* and the last **#** with *zz*, and remove all the **?** and **!**. Therefore, we used only one distinct special power character i.e. **#**.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>