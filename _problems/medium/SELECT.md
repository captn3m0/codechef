---
{"category_name":"medium","problem_code":"SELECT","problem_name":"Sebi and the black money","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"kevinsogo","date_added":"3-11-2016","tags":{"0":"backtracking","1":"cook76","2":"iscsi","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/SELECT","time":{"view_start_date":1479666600,"submit_start_date":1479666600,"visible_start_date":1479666600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/mandarin/SELECT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/russian/SELECT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/vietnamese/SELECT.pdf">Vietnamese</a> as well.</h3>

<p>Each year during the election time, every politician in Chefland promises to bring black money back, but no concrete steps has yet been taken in this regard. The current government knows that many of its citizens store the illegal money in foreign banks through <a href="https://en.wikipedia.org/wiki/Hawala_scandal">Havala</a>. It contacted many banks and has gathered information about a total of 4000 such names. The government is under immense pressure to release the names, so its been decided that securing this information is very critical to not let it go into bad hands and is secured by a very strong encryption algorithm. 
</p>

<p>Sebi is a hacker and a vigilante who is adamant on making the names of the people with black money known to public. Being a hacker, he finds all of these 4000 encrypted names by exploiting a CSRF bug. Also, he has found the encryption algorithm used which is described below.</p>

<p>
<code>
<pre>
Let the string <b>S</b> represents the name of black money holder.
It consists of N lower case English Alphabets.

encrypt(S[0..N-1])
	W[0..N-1] = {0,..,0}
	for i=0 to N-1
		if S[i]<'a' or S[i]>'z' than 
			return "failure in encryption"
		for j=0 to N-1
			if S[i]>S[j] than
				W[i]++
		for j=i to N-1
			if i != j and S[i] == S[j] than 
				return "failure in encryption"
			W[i] = W[i] + S[j] - 'a'

		W[i] = W[i] mod 10

	The encrypted name of person is W[0],W[1]..,W[N-1]
</pre>
</code>
</p>

<p>
Few sample outputs of encrypt function are as follows.
<code>
<pre>
encrypt("anupklby") = 48768961
encrypt("adurysk") = 2342822
</pre>
</code>
</p>

<p>
After understanding the algorithm and the details of the encrypted names, he realized that he have made a big fool of himself, these people have been very smart and did not provide their original names. They tried to hide their identity as much as possible by having all the characters in their names different and padding them with unnecessary characters so as to make sure all of the names have length equal to <b>N</b>.</p>

<p>Now, Sebi wants to reveal the names of these public by decrypting the algorithm. He doesn't provide any guarantee that the provided name is the unique such possible name corresponding to the decryption of encrypted name, he just claims that at least this name's encryption comes out to be equal to given encrypted name. He wants to expose as many black many holders as possible and by setting a high standard for himself want to expose name corresponding to at least 3960 of the encrypted names.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, <b>N</b>. <b>T</b> is always 4000, <b>N</b> is always 8 except in the examples, <b>N</b> is the length of the names of the persons.</p>
<p>Each of the next <b>T</b> lines contains the encrypted name of a person.</p>

<h3>Output</h3>
<p>Output <b>T</b> lines. A line can contain -1 if you are not able to find the corresponding name, or a <b>N</b> length string corresponding to the name containing different lowercase Latin letters.</p>

<h3>Constraints</h3>
<ul>
<li><b>T</b> = <b>4000</b></li>
<li><b>N</b> = <b>8</b></li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
1 1
2

<b>Output:</b>
w
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
1 2
79

<b>Output:</b>
js
</pre>



<h3>Example 3</h3>
<pre><b>Input:</b>
1 8
48768961

<b>Output:</b>
anupklby
</pre>

<h3>Example 4</h3>
<pre><b>Input:</b>
1 7
2342822

<b>Output:</b>
adurysk
</pre>

<h3>Explanation</h3>
<p><b>Example case 3.</b> One possible black money holder for this encrypted name can be "anupklby".</p>