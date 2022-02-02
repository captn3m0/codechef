---
{"category_name":"easy","problem_code":"ALETHIO","problem_name":"Lyra and the Alethiometer","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pragrame","problem_tester":"tuananh93","date_added":"3-06-2013","tags":{"0":"ad","1":"cook35","2":"easy","3":"pragrame"},"editorial_url":"http://discuss.codechef.com/problems/ALETHIO","time":{"view_start_date":1372012200,"submit_start_date":1372012200,"visible_start_date":1414769400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Lyra Belacqua is a very gifted girl. She is one of a very small set of people capable of reading an alethiometer, more commonly known as The Golden Compass. It has one specific use: to tell the truth. The name in fact, is derived from "Aletheia" meaning truth, and "-ometer", meaning "measuring device".
</p>
<p>
The alethiometer had four needles, out of which the user would direct three of them to lie over symbols on the face of the device to ask a question. The fourth needle then swung into action and pointed to various symbols one after another, thus telling the answer.
</p>
<p>
For this problem, consider the alethiometer consisting of symbols : digits '<b>0</b>'-'<b>9</b>' and letters '<b>A</b>'-'<b>Z</b>'. Learned scholars were debating the age of the Universe, and they requested Lyra to find out the age from the alethiometer. Having asked the question, the fourth needle started spouting out symbols, which Lyra quickly recorded. In that long string of characters, she knows that some substring corresponds to the age of the Universe. She also knows that the alethiometer could have wrongly pointed out atmost one digit (0-9) as a letter (A-Z). She then wonders what is the maximum possible age of the Universe.
</p>
<p>
Given the set of symbols the alethiometer pointed out, help her find the maximum age of the Universe, which could correspond to a substring of the original string with atmost one letter changed.
</p>
<p>
<b>Note:</b> We consider a substring to be a contiguous part of the string <b>S</b> <br /><br />
Also, the alethiometer wrongly reports only a <b>letter</b>. All the <b>digits</b> <i>remain as they are</i>.
</p>
<h3>Input</h3>
<p>
Each input consists of a single string <b>S</b> which is what Lyra recorded from the fourth needle's pointing.
</p>
<h3>Output</h3>
<p>
Output one number, the maximum possible answer.
</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b>  ≤ |<b>S</b>|  ≤ <b>1,000</b></li>
<li> <b>S</b> will only contain digits 0-9 and uppercase Latin letters. </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input1:</b>
06454

<b>Input2:</b>
C0D3C43F

<b>Output1:</b>
6454

<b>Output2:</b>
3943
</pre><h3>Explanation</h3>
<p>
In the first example, there is no choice as to what the number can be. It has to be 6,454.
</p>
<p>
In the second example, there are a total of 41 possible strings (one for the original, and 10 for changing each letter). You can verify that the maximum number as a substring is got by making the string "C0D3943F".
</p>
